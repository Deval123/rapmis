<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Etablissements;
use AppBundle\Entity\Epreuves;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();

        $students = $em->getRepository('AppBundle:Students')->findAll();
        $classes = $em->getRepository('AppBundle:Classes')->findAll();

        //epreuve
        $epreufe = new Epreuves();
        $form = $this->createForm('AppBundle\Form\EpreuvesType', $epreufe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($epreufe);
            $em->flush();

            return $this->redirectToRoute('epreuves_show', array('id' => $epreufe->getId()));
        }


        //download Epreuve

        $form1 = $this->createForm('AppBundle\Form\RechercheEpreuvesType');
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $epreuve = $em->getRepository('AppBundle:Epreuves')->findAll();
            return $this->redirectToRoute('epreuves_index',
                array('matieres' => $form1['matieres']->getData(),
                'classes' => $form1['classes']->getData(),
                'name' => $form1['name']->getData(),
                'epreuve' => $epreuve));
        }




        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'students' => $students,
            'classes' => $classes,
            'epreufe' => $epreufe,
            'form' => $form->createView(),
            'form1' => $form1->createView(),
            ));
    }



    /**
     * @Route("/event", name="event")
     *
     */
    public function eventAction(Request $request)
    {
        return $this->render('default/event.html.twig');
    }

    /**
     * @Route("/new", name="show_pop")
     */
    public function popupAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/popup.html.twig');
    }


    /**
     * @Route("/testons", name="testons")
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function testonsAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            return $this->render('default/testons.html.twig');
        }

        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
            return $this->render('default/testons1.html.twig');
        }

        return $this->render('default/popup.html.twig');

    }


    /**
     * @Route("/who_is", name="who_is_user")
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function who_isAction()
    {

            return $this->render('default/who_is.html.twig');

    }


    /**
     * Generate and save a PDF
     *
     * @Route("/note_repport/{id}/pdf", name="note_repport")
     */
    public function pdfAction($id, Request $request) {
        // get contract from database
        $em = $this->getDoctrine()->getManager();
        $c = $em->getRepository('AppBundle:Students')->find($id);

        $path = $request->server->get('DOCUMENT_ROOT');    // C:/wamp64/www/
        $path = rtrim($path, "/");                         // C:/wamp64/www

        $html = $this->renderView('pdf/content.html.twig', array('c' => $c,
            'title' => 'Hello World !',));

        $header = $this->renderView('pdf/header.html.twig', array(
            'path' => $path
        ));
        $footer = $this->renderView('pdf/footer.html.twig', array(
            'customer' => $c->getName()
        ));

        $output = $path . $request->server->get('BASE');        // C:/wamp64/www/project/web
        $output .= '/pdf/bulletin-'. $c->getPrenom() .'.pdf';

        // Generate PDF file
        $this->get('knp_snappy.pdf')->generateFromHtml($html, $output, array(
            'header-html' => $header,
            'footer-html' => $footer,

        ));

        // Message + redirection
        $this->addFlash('success', 'The PDF file has been saved.');
        //return $this->redirectToRoute('students/' .$c->getId());
        return $this->redirect($this->generateUrl('students_show', array('id' => $c->getId())));

    }

//    /**
//     *Generate and save a PDF (note repport)
//     *
//     *@Route("/note_repport/pdf", name="note_repport")
//     */
//    public function pdfAction()
//    {
//        $snappy = $this->get('knp_snappy.pdf');
//
//        $html = $this->renderView('pdf/template.html.twig', array(
//            'title' => 'Hello World !'
//        ));
//
//        $filename = 'myFirstSnappyPDF';
//
//        return new Response(
//            $snappy->getOutputFromHtml($html),
//            200,
//            array(
//                'Content-Type'          => 'application/pdf',
//                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
//            )
//        );
//    }

}
