<?php

namespace MyApp\ApBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\ApBundle\Entity\Message;
use MyApp\ApBundle\Form\MessageForm;

class MessageController extends ContainerAware
{
    public function choisirLangueAction($langue = null)
    {
        if($langue != null)
        {
            // On enregistre la langue en session
            $this->container->get('session')->setLocale($langue);
        }

        // on tente de rediriger vers la page d'origine
        $url = $this->container->get('request')->headers->get('referer');
        if(empty($url)) {
            $url = $this->container->get('router')->generate('myapp_client_lister');
        }
        return new RedirectResponse($url);
    }
    
    public function topAction($max = 5)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        
        $qb = $em->createQueryBuilder();
        $qb->select('a')
        ->from('MyAppApBundle:Message', 'a')
        ->where('a.created >= :date')
        ->orderBy('a.created', 'DESC')
        ->setMaxResults($max)
        ->setParameter('date', new \DateTime('-48 houre'));

        $query = $qb->getQuery();
        $messages = $query->getResult();

        return $this->container->get('templating')->renderResponse('MyAppApBundle:Message:liste.html.twig', array(
            'messages' => $messages,
        ));
    }
    public function listerAction($max = 50)
    {
	$em = $this->container->get('doctrine')->getEntityManager();

        $qb = $em->createQueryBuilder();
        $qb->select('a')
        ->from('MyAppApBundle:Message', 'a')
        ->orderBy('a.created', 'DESC')
        ->setMaxResults($max);


        $query = $qb->getQuery();
        $messages = $query->getResult();

	return $this->container->get('templating')->renderResponse('MyAppApBundle:Message:lister.html.twig', 
	array(
	'messages' => $messages,
 	));
    }
    
    public function ajouterAction()
    {
        $messageReply='';
        $message = new Message();
        $em = $this->container->get('doctrine')->getEntityManager();
        
        $form = $this->container->get('form.factory')->create(new MessageForm(), $message);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') 
        {
            $form->bindRequest($request);
                    
            if ($form->isValid()) 
                {       
                    $user = $this->container->get('security.context')->getToken()->getUser(); 
                    $message -> setUser($user);
                    $em->persist($message);
                    $em->flush();
                    $messageReply='Message ajouté avec succès !';
                }
        }

        return $this->container->get('templating')->renderResponse(
        'MyAppApBundle:Message:ajouter.html.twig',
        array(
            'form' => $form->createView(),
            'messageReply' => $messageReply,
        ));
    }
}
