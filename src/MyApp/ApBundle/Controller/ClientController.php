<?php

namespace MyApp\ApBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\ApBundle\Entity\Client;
use MyApp\ApBundle\Entity\ClientService;
use MyApp\ApBundle\Entity\Service;
use MyApp\ApBundle\Entity\Note;
use MyApp\ApBundle\Entity\DateTable;
use MyApp\ApBundle\Form\ClientServiceForm;
use MyApp\ApBundle\Form\ClientForm;
use MyApp\ApBundle\Form\NoteForm;
use MyApp\ApBundle\Form\ClientEtatForm;
use MyApp\ApBundle\Form\ClientRechercheForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sorien\DataGridBundle\Grid\Source\Entity;
use Sorien\DataGridBundle\Grid\Column\TextColumn;
use Sorien\DataGridBundle\Grid\Column\ActionsColumn;
use Sorien\DataGridBundle\Grid\Action\MassAction;
use Sorien\DataGridBundle\Grid\Action\DeleteMassAction;
use Sorien\DataGridBundle\Grid\Action\RowAction;
use Ivory\GoogleMapBundle\Model\MapTypeId;
use Ivory\GoogleMapBundle\Model\Overlays\Animation;


class ClientController extends ContainerAware
{    
  public function rechercherAction()
    {               
        $request = $this->container->get('request');

        if($request->isXmlHttpRequest())
        {
            $motcle = '';
            $motcle = $request->request->get('motcle');
            $em = $this->container->get('doctrine')->getEntityManager();
            $user = $this->container->get('security.context')->getToken()->getUsername();

            if($motcle != '')
            {
                $qb = $em->createQueryBuilder();
                $qb ->select('a')
                  ->from('MyAppApBundle:Client', 'a')
                  ->where("a.nom LIKE :motcle OR a.prenom LIKE :motcle OR a.phoneNumber LIKE :motcle OR a.street LIKE :motcle ")
                  ->orderBy('a.nom', 'ASC')
                  ->setParameter('motcle', '%'.$motcle.'%');
               $query = $qb->getQuery();               
               $recherche = $query->getResult();

        $paginator = $this->container->get('knp_paginator');
        $pagination = $paginator->paginate(
            $recherche,
            $this->container->get('request')->query->get('page', 1)/*page number*/,
            100/*limit per page*/
                );
        $pagination->setPageRange(7);
            }
            else {


        $dql = "SELECT c FROM MyAppApBundle:Client c WHERE c.user = :user";
        $qb = $em->createQuery($dql);
        $qb-> setParameter('user', $user);


        $paginator = $this->container->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb,
            $this->container->get('request')->query->get('page', 1)/*page number*/,
            100/*limit per page*/
                );
        $pagination->setPageRange(7);

            }

            return $this->container->get('templating')->renderResponse('MyAppApBundle:Client:liste.html.twig', array(
        'pagination' => $pagination,   
        'message' => 'good',
                ));
        }
        else {
            return $this->listerAction();
        }
    }
/**
* Lists all Clients entities.
*
* @Route("/admin/client/", defaults={"page" = 1}, name="client")
* @Route("/admin/client/page{page}", name="client_paginated")
*/
    public function listerAction()
    {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $username = $this->container->get('security.context')->getToken()->getUsername();

  $qb = $em->createQueryBuilder();
                $qb ->select(' SUM(p.id), SUM(a.prix)')
                  ->from('MyAppApBundle:ClientService', 'a')
                  ->join('a.client', 's')
                  ->join('s.contrat', 'c')
                  ->join('c.production', 'p')
                  ->where("s.user LIKE :username ")
                  ->andWhere("c.contratEstimation LIKE :Contrat")
                  ->setParameters(array('username' => $username,'Contrat' => 'Contrat'));
        $query = $qb->getQuery();               
        $test = $query->getResult();
$testtt =array();
$i=1;
$testt = array(array('semaine', 'P', 'prod id'));
        foreach ($test as $t){
                    foreach ($t as $tt){
                        if ($tt[0]){
                            $testtt [0] = 'Semaine 0'; 
                        }
                        
            $testtt [$i] = intval($tt); 
            $i++;
            
                    }
                       
        }
 $testt []= $testtt ;
 echo json_encode($testt);           

       
        
        $form = $this->container->get('form.factory')->create(new ClientRechercheForm());
         $client = new Client();
        
         $formClient = $this->container->get('form.factory')->create(new ClientForm(), $client);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') 
        {
            $formClient->bindRequest($request);
                    
            if ($formClient->isValid()) 
                {      
                    $em = $this->container->get('doctrine')->getEntityManager();
                    $user = $this->container->get('security.context')->getToken()->getUser();
                    
                    $number = $formClient['number']->getData();

                    $street = $formClient['street']->getData();
                    $city = $formClient['city']->getData();
                    $pc = $formClient['pc']->getData();
                    $ville= $city ->getCity();

                    $address= $number." ".$street." ".$ville." ".$pc ;
                    
                    $geocoder = new \Geocoder\Geocoder();
                    $adapter  = new \Geocoder\HttpAdapter\BuzzHttpAdapter();

                    $geocoder->registerProviders(array(
                        new \Geocoder\Provider\GoogleMapsProvider ($adapter, 'AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U'),
                    ));
                    
                    $result = $geocoder->geocode($address);
                    
                    $date = new DateTable();
                    $client->setDateTable($date);
                    $date ->setDate(new \DateTime());
                    $client -> setUser($user);
                    $client -> setLat($result['latitude']);
                    $client -> setLng($result['longitude']);
                    $em->persist($client);
                    $em->persist($date);
                    $em->flush();
                    
                }
                


         }
        $user = $this->container->get('security.context')->getToken()->getUsername();

        
        $query = $this->container->get('doctrine')
                        ->getManager()
                        ->getRepository('MyAppApBundle:Client')
                        ->getAllClientsByFranchise($user);

        $paginator = $this->container->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $this->container->get('request')->query->get('page', 1)/*page number*/,
            15/*limit per page*/
                );
        $pagination->setPageRange(7);
    /**           $qb = $em->createQueryBuilder();

                $qb->select('c.nom')
                    ->from('MyAppApBundle:Client', 'c')
                    ->where("c.user = :user")
                    ->setParameter('user', $user);

                $query = $qb->getQuery();               
                $clientsSearch = $query->getResult();


*/

        return $this->container->get('templating')->renderResponse('MyAppApBundle:Client:lister.html.twig', 
	array(
        'pagination' => $pagination,  
   //     'clientsSearch' => $clientsSearch, 
        'message' => '',
        'form' => $form->createView(),
        'formClient' => $formClient->createView(),
        'test' => $testt,

 	));
         }
              
    
    public function ajouterAction() 
    {
        $message = '';
        $client = new Client();
        $date = new DateTable();
        $client->setDateTable($date);
        $date ->setDate(new \DateTime());
        
        $form = $this->container->get('form.factory')->create(new ClientForm(), $client);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') 
        {
            $form->bindRequest($request);
                    
            if ($form->isValid()) 
                {      
                    $em = $this->container->get('doctrine')->getEntityManager();
                    $user = $this->container->get('security.context')->getToken()->getUser();
                    $client -> setUser($user);
                    $em->persist($client);
                    $em->persist($date);
                    $em->flush();
                    $message='Client ajouté avec succès'; 
                    
                }

         }

        return $this->container->get('templating')->renderResponse(
        'MyAppApBundle:Client:ajouter.html.twig',
        array(
            'form' => $form->createView(),
            'message' => $message
        ));
    }

    public function modifierAction($id)
    {
        $message='';
	$em = $this->container->get('doctrine')->getEntityManager();
        $clients= $em->getRepository('MyAppApBundle:Client')->findAll();
        $client = $em->find('MyAppApBundle:Client', $id);
      
      
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
        if (isset($id)) 
            {
                    if (!$client)
                    {
                            $message='Aucun client trouvé';
                    }
            }
            $form = $this->container->get('form.factory')->create(new ClientForm(), $client);

            $request = $this->container->get('request');

            if ($request->getMethod() == 'POST') 
            {
                        $form->bindRequest($request);

                if ($form->isValid()) 
                {
                            $this->container->get('session')->getFlashBag()->add('notice', 'Your changes were saved!');

                        $date = new DateTable();
                        $client->setDateTable($date);
                        $date ->setDate(new \DateTime());
                        $em->persist($client);
                        $em->flush();
                        if (isset($id)) 
                            {
                            $message='Client modifié avec succès !';
                            }
                        else 
                            {
                            $message='Client ajouté avec succès !';
                            }
                }
       $form = $this->container->get('form.factory')->create(new ClientEtatForm(), $client);
    return new RedirectResponse($this->container->get('router')->generate('myapp_estimation_voirClient',array('id'=>$id, 'message'=>'Service supprimé avec succès !'))); 

            }
        return $this->container->get('templating')->renderResponse(
        'MyAppApBundle:Client:modifier.html.twig',
                array(
                'form' => $form->createView(),
                'message' => $message,
                'clients' => $clients,
                'client' => $client,
                ));
        }

    public function supprimerAction($id)
    {
    $em = $this->container->get('doctrine')->getEntityManager();
    $client = $em->find('MyAppApBundle:Client', $id);

    if (!$client) 
    {
        throw new NotFoundHttpException("Client non trouvé");
    }

    $em->remove($client);
    $em->flush();        

    return new RedirectResponse($this->container->get('router')->generate('myapp_client_lister'));
    }
    
    
    
    public function creerServiceAction($id = null, $map = null)
    {
        $message = '';
        $em = $this->container->get('doctrine')->getEntityManager();
        $client = $em->find('MyAppApBundle:Client', $id);
        $clientService= new ClientService;     
      
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
      
        
        $form = $this->container->get('form.factory')->create(new ClientServiceForm(), $clientService);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') 
        {
        $form->bindRequest($request);
                    
            if ($form->isValid()) 
                {       
                    $clientService -> setClient($client);
                    $clientService ->getPrix();
                    $clientService ->getService();

                    $em->persist($clientService);
                    $em->flush();
                    $message='Modifié !';
                    
                    
           
                
                return new RedirectResponse($this->container->get('router')->generate('myapp_estimation_voirClient', array('id' => $id)));}
       
        }
        return $this->container->get('templating')->renderResponse(
        'MyAppApBundle:Estimation:ajouter.html.twig',
        array(
            'form' => $form->createView(),
            'message' => $message,
            'client' => $client,
            
        ));
    }
    public function noteAction($id=null)
    {
	$em = $this->container->get('doctrine')->getEntityManager();
        
        $client = $em->find('MyAppApBundle:Client', $id);
        $note = new Note();
        $form = $this->container->get('form.factory')->create(new NoteForm(),$note);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') 
        {
        $form->bindRequest($request);
                    
            if ($form->isValid()) 
                {   
                    $note ->setClient($client);
                    $note ->setType('Pap');
                    $em->persist($note);
                    $em->flush();
                    $message='Note ajouté avec succès !';
                    
                    return new RedirectResponse($this->container->get('router')->generate('myapp_client_lister'));
                }
       
        }

	return $this->container->get('templating')->renderResponse('MyAppApBundle:Note:ajouter.html.twig', 
	array(
        'form' => $form->createView(),
        'message' => '',
        'client' => $client,
 	));
    }
    

public function indexAction()
{
   
        $message = \Swift_Message::newInstance();
        $message->setSubject("Objet");
        $message->setFrom('guillaumeduval64@gmail.com');
        $message->setTo('guillaumeduval64@gmail.com');
        // pour envoyer le message en HTML
        $message->setBody('Hello world');
        // pour envoyer le message en HTML
        $message->setBody('<p>Hello world</p>','text/html'); 
        //envoi du message
         $this->get('mailer')->send($message);
     

            return $this->container->get('templating')->renderResponse(
        'MyAppApBundle:Map:voir.html.twig');
    
}
public function supprimerServiceAction($idd=null, $id=null)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
          $clientService= $em->getRepository('MyAppApBundle:ClientService')->find($idd);
            $em->remove($clientService);
            $em->flush(); //only call this after you've made all your data modifications 
    return new RedirectResponse($this->container->get('router')->generate('myapp_estimation_voirClient',array('id'=>$id, 'message'=>'Service supprimé avec succès !'))); 
    }    
}
