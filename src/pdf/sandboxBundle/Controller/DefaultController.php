<?php

namespace pdf\sandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends Controller
{

    public function indexAction()
    {

       /*
       $this->redirectToRoute('bulletin', array('id' => $media->getId()))
       return $this->render('sandboxBundle:Default:index.html.twig',[

        ]);*/

        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('students/bulletin.html.twig', array(
            'title'=>'Mon premier bulletin de note'
            //..Send some data to your view if you need to //
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

    /**
     *  Render in a PDF the sandbox_homepage URL
     * @return Response
     */
    public function pdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';

        // use absolute path !
        $pageUrl = $this->generateUrl('sandbox_homepage', array(), UrlGeneratorInterface::ABSOLUTE_URL);

        return new Response(
            $snappy->getOutput($pageUrl),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }
}