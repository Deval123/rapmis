<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Facteurs_disciplinaires;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Facteurs_disciplinaire controller.
 *
 * @Route("facteurs_disciplinaires")
 */
class Facteurs_disciplinairesController extends Controller
{
    /**
     * Lists all facteurs_disciplinaire entities.
     *
     * @Route("/", name="facteurs_disciplinaires_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $facteurs_disciplinaires = $em->getRepository('AppBundle:Facteurs_disciplinaires')->findAll();

        return $this->render('facteurs_disciplinaires/index.html.twig', array(
            'facteurs_disciplinaires' => $facteurs_disciplinaires,
        ));
    }

    /**
     * Creates a new facteurs_disciplinaire entity.
     *
     * @Route("/new", name="facteurs_disciplinaires_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $facteurs_disciplinaire = new Facteurs_disciplinaires();
        $facteurs_disciplinaire->setDateMotif(new \DateTime());
        $form = $this->createForm('AppBundle\Form\Facteurs_disciplinairesType', $facteurs_disciplinaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facteurs_disciplinaire);
            $em->flush();

            return $this->redirectToRoute('facteurs_disciplinaires_show', array('id' => $facteurs_disciplinaire->getId()));
        }

        return $this->render('facteurs_disciplinaires/new.html.twig', array(
            'facteurs_disciplinaire' => $facteurs_disciplinaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a facteurs_disciplinaire entity.
     *
     * @Route("/{id}", name="facteurs_disciplinaires_show")
     * @Method("GET")
     */
    public function showAction(Facteurs_disciplinaires $facteurs_disciplinaire)
    {
        $deleteForm = $this->createDeleteForm($facteurs_disciplinaire);

        return $this->render('facteurs_disciplinaires/show.html.twig', array(
            'facteurs_disciplinaire' => $facteurs_disciplinaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing facteurs_disciplinaire entity.
     *
     * @Route("/{id}/edit", name="facteurs_disciplinaires_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Facteurs_disciplinaires $facteurs_disciplinaire)
    {
        $deleteForm = $this->createDeleteForm($facteurs_disciplinaire);
        $editForm = $this->createForm('AppBundle\Form\Facteurs_disciplinairesType', $facteurs_disciplinaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('facteurs_disciplinaires_show', array('id' => $facteurs_disciplinaire->getId()));
        }

        return $this->render('facteurs_disciplinaires/edit.html.twig', array(
            'facteurs_disciplinaire' => $facteurs_disciplinaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a facteurs_disciplinaire entity.
     *
     * @Route("/{id}", name="facteurs_disciplinaires_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Facteurs_disciplinaires $facteurs_disciplinaire)
    {
        $form = $this->createDeleteForm($facteurs_disciplinaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($facteurs_disciplinaire);
            $em->flush();
        }

        return $this->redirectToRoute('facteurs_disciplinaires_index');
    }

    /**
     * Creates a form to delete a facteurs_disciplinaire entity.
     *
     * @param Facteurs_disciplinaires $facteurs_disciplinaire The facteurs_disciplinaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Facteurs_disciplinaires $facteurs_disciplinaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('facteurs_disciplinaires_delete', array('id' => $facteurs_disciplinaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
