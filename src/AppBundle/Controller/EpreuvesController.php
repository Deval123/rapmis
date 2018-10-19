<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Epreuves;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Nzo\FileDownloaderBundle\NzoFileDownloaderBundle;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Epreufe controller.
 *
 * @Route("epreuves")
 */
class EpreuvesController extends Controller
{
    /**
     * Lists all epreufe entities.
     *
     * @Route("/", name="epreuves_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $epreuves = $em->getRepository('AppBundle:Epreuves')->findAll();

        return $this->render('epreuves/index.html.twig', array(
            'epreuves' => $epreuves,
        ));
    }

    /**
     * Creates a new epreufe entity.
     *
     * @Route("/new", name="epreuves_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $epreufe = new Epreuves();
        $form = $this->createForm('AppBundle\Form\EpreuvesType', $epreufe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($epreufe);
            $em->flush();

            return $this->redirectToRoute('epreuves_show', array('id' => $epreufe->getId()));
        }

        return $this->render('epreuves/new.html.twig', array(
            'epreufe' => $epreufe,
            'form' => $form->createView(),
        ));
    }

    /**
     * download subject
     * @Route("/subject/{id}/{id1}", name="download")
     * @Method({"GET", "POST"})
     */
    public function downloadAction($id)
    {
        # Read / Show the file content in the Web Browser:
        if('id1' == 'show'){
            /*https://packagist.org/packages/nzo/file-downloader-bundle
             * return $this->get('nzo_file_downloader')->readFile("uploads/epreuves/".$id, $id);*/
            $streamedResponse = new StreamedResponse();
            return $this->get('nzo_file_downloader')->downloadStreamedResponse($streamedResponse, "uploads/epreuves/".$id, $id);
        }

        # change the name of the file when downloading:
        return $this->get('nzo_file_downloader')->downloadFile("uploads/epreuves/".$id, $id );

        # Force file download:
        //return $this->get('nzo_file_downloader')->downloadFile('myfolder/brasserie.pdf');

    }




    /**
     * Finds and displays a epreufe entity.
     *
     * @Route("/{id}", name="epreuves_show")
     * @Method("GET")
     */
    public function showAction(Epreuves $epreufe)
    {
        $deleteForm = $this->createDeleteForm($epreufe);

        return $this->render('epreuves/show.html.twig', array(
            'epreufe' => $epreufe,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing epreufe entity.
     *
     * @Route("/{id}/edit", name="epreuves_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Epreuves $epreufe)
    {
        $deleteForm = $this->createDeleteForm($epreufe);
        $editForm = $this->createForm('AppBundle\Form\EpreuvesType', $epreufe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('epreuves_edit', array('id' => $epreufe->getId()));
        }

        return $this->render('epreuves/edit.html.twig', array(
            'epreufe' => $epreufe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a epreufe entity.
     *
     * @Route("/{id}", name="epreuves_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Epreuves $epreufe)
    {
        $form = $this->createDeleteForm($epreufe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($epreufe);
            $em->flush();
        }

        return $this->redirectToRoute('epreuves_index');
    }

    /**
     * Creates a form to delete a epreufe entity.
     *
     * @param Epreuves $epreufe The epreufe entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Epreuves $epreufe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('epreuves_delete', array('id' => $epreufe->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
