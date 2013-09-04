<?php

namespace MyApp\ApBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\ApBundle\Entity\Client;
use MyApp\ApBundle\Entity\Service;
use MyApp\ApBundle\Entity\Note;
use MyApp\ApBundle\Form\NoteForm;
use MyApp\ApBundle\Entity\City;
use MyApp\ApBundle\Entity\Contrat;
use MyApp\ApBundle\Entity\DateTable;
use MyApp\ApBundle\Entity\ClientService;
use MyApp\ApBundle\Form\ClientForm;
use MyApp\ApBundle\Form\ClientEtatForm;
use Ivory\GoogleMapBundle\Model\MapTypeId;
use Ivory\GoogleMapBundle\Model\Overlays\Animation;

use MyApp\ApBundle\Form\EstimationForm;

class EstimationController extends ContainerAware
{

  public function voirClientAction($id) 
    { 
      $em = $this->container->get('doctrine')->getEntityManager();
      $client = $em->find('MyAppApBundle:Client', $id);
      $formClient = $this->container->get('form.factory')->create(new ClientForm(), $client);
      
             $query = $em->createQuery('SELECT a.city FROM MyAppApBundle:Client c JOIN c.city a 
     WHERE c.id = :id')->setParameter('id', $id);
        $city = $query->getResult();

      $geocoder = $this->container->get('ivory_google_map.geocoder');
      $test= $client ->getNumber()." ".$client ->getStreet()." ".$city[0]['city']." ".$client -> getPc();
      $response = $geocoder->geocode($test);
      
      $map = $this->container->get('ivory_google_map.map');
      
      // Requests the ivory google map marker service
        $marker = $this->container->get('ivory_google_map.marker');
      
      // Sets your marker animation
        $marker->setAnimation('bounce');

      foreach($response->getResults() as $result)
{
    // Request the google map merker service
    $marker = $this->container->get('ivory_google_map.marker');

    // Position the marker
    $marker->setPosition($result->getGeometry()->getLocation());

    // Add the marker to the map
    $map->addMarker($marker);
}
      $contrats = new Contrat;
      

    
    $clientServices= $em->getRepository('MyAppApBundle:ClientService')->findByClient($id);
           


        
        
                $message='';
                $conn = $this->container->get('database_connection');
        $sql=('SELECT c.created, c.numero, c.id, c.date, sum(cs.prix) as prix, group_concat( s.type ) AS service
FROM contrat c
LEFT JOIN contrat_clientservice t ON t.contrat_id=c.id
LEFT JOIN clientService cs ON t.clientservice_id = cs.id
LEFT JOIN service s ON s.id = cs.service_id
LEFT JOIN client d ON d.id = c.client_id
WHERE d.id = :clientid
GROUP BY c.id');
 $clientservicestest = $conn->prepare($sql);
$clientservicestest->bindValue("clientid", $client->getId());
$clientservicestest->execute();        
        
    if (!$client) 
    {
        throw new NotFoundHttpException("service non trouvé");
    }         
        $note = new Note();
        $formNote = $this->container->get('form.factory')->create(new NoteForm(),$note);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') 
        {
        $formNote->bindRequest($request);
                    
            if ($formNote->isValid()) 
                {   
                    $note ->setClient($client);
                    $note ->setType('Pap');
                    $em->persist($note);
                    $em->flush();
                    $message='Note ajouté avec succès !';
                    
                     $notes= $em->getRepository('MyAppApBundle:Note')->findByClient($id);
                     return $this->container->get('templating')->renderResponse('MyAppApBundle:Estimation:voir.html.twig', array(
    'client' => $client,
    'notes' => $notes,
    'message' => $message,
    'clientServices' => $clientServices,

    'formNote' => $formNote->createView(),
    'response' => $response,
     'clientservicestest' => $clientservicestest,
    'map' => $map,
    ));
                }
       
        }
         
          $notes= $em->getRepository('MyAppApBundle:Note')->findByClient($id);
         
         
         
    return $this->container->get('templating')->renderResponse('MyAppApBundle:Estimation:voir.html.twig', array(
    'client' => $client,
    'notes' => $notes,
    'message' => $message,
    'formClient' => $formClient->createView(),
    'clientServices' => $clientServices,
    'formNote' => $formNote->createView(),
    'response' => $response,
    'map' => $map,
    'clientservicestest' => $clientservicestest,

    ));
    } 
     
  public function voirServiceAction($id) 
    { 
    $em = $this->container->get('doctrine')->getEntityManager();
    $client = $em->find('MyAppApBundle:Client', $id);
         $message = '';
    
    if (!$client) 
    {
        throw new NotFoundHttpException("service non trouvé");
    }
        $form = $this->container->get('form.factory')->create(new EtatForm(), $client);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') 
        {
            $form->bindRequest($request);
                    
            if ($form->isValid()) 
                {       
                    $em = $this->container->get('doctrine')->getEntityManager();
                    $em->persist($client);
                    $em->flush();
                    $message='Etat ajouté avec succès !';
                }
                return new RedirectResponse($this->container->get('router')->generate('myapp_client_lister'));
         }
    return $this->container->get('templating')->renderResponse('MyAppApBundle:Client:voir.html.twig', array(
    'client' => $client, 
    'message' => $message, 
    ));
    } 
    public function suivantAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
          $request = $this->container->get('request');
          $param = $request->get('param');
          $etat = $request->get('etat');
        $client = $em->getRepository('MyAppApBundle:Client')
                         ->find($id);
                 if($etat!=null){
      
   
                 
                                   $liste_articles = $em->getRepository('MyAppApBundle:Client')
                         ->myFindNextClientEtat($etat);
           
}
else{
    $liste_articles = $em->getRepository('MyAppApBundle:Client')
                         ->myFindNextClient();
}
 
          $id = intval($id);
                 foreach ($liste_articles as $article){
                     $test= $article->getId();
                     if($test == $id){
                         if($param == 'Next'){
                         $idPrev = current($liste_articles);
                         
                         $idPrev = intval($idPrev ->getId());
                         }
                        elseif($param === 'Prev'){
                            $idPrev = prev($liste_articles);
                            $current_index = array_search( $idPrev,$liste_articles);
                            
                         $current_index = $current_index - 1;
                         if($current_index < 0){
                             echo 'rien avant!';
                             
                         }
          $test = $liste_articles[$current_index];
                        $idPrev = intval($test ->getId());

                       

                         }
                         
                     }
                         
                         
                 }     
                     
                 
 
    
    return new RedirectResponse($this->container->get('router')->generate('myapp_estimation_voirClient', array(
    'id' => $idPrev, 
    )));
    }
}