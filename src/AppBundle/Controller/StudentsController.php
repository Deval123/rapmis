<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Students;
use AppBundle\Entity\Notes;
use AppBundle\Form\StudentsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Student controller.
 *
 * @Route("students")
 */
class StudentsController extends Controller
{
    /**
     * Lists all student entities.
     *
     * @Route("/", name="students_index")
     * @Method("GET")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        //$students = $em->getRepository('AppBundle:Students')->findAll();

        $classes = $em->getRepository('AppBundle:Classes')
            ->findBy(array('etablissements'=>$this->getUser()->getEtablissements()));

        $students = $em->getRepository('AppBundle:Students')
            ->createQueryBuilder('c')
            ->where('c.classes IN (:classes)')
            ->setParameter('classes', $classes)
            //dump($qb);
            ->getQuery()->getResult();



        // pour les notes
        $em1 = $this->getDoctrine()->getManager();

        $notes = $em1->getRepository('AppBundle:Notes')->findAll();



        return $this->render('students/index.html.twig', array(
            'students' => $students,
            'notes' => $notes,
        ));

    }

    /**
     * Lists all student entities per class.  var_dump
     *
     * @Route("/class/{flo}/{dev}", name="students_index_class")
     * @Method("GET")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function index_classAction( $flo, $dev)
    {
        $em = $this->getDoctrine()->getManager();

        $students = $em->getRepository('AppBundle:Students')->findAll();

        //$students = $em->getRepository('AppBundle:Students')->findBy (
         //   array( 'classes.name' => $flo, 'classes.niveau.name' => $dev));

        //$students = $em->getRepository('AppBundle:Students')->findByStudents($dev, $flo);



        return $this->render('students/index_class.html.twig', array(
            'students' => $students,
            'flo' => $flo,
            'dev' => $dev
        ));
    }


    /**
     * Creates a new student entity.
     *
     * @Route("/new", name="students_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function newAction(Request $request)
    {
        $student = new Students();
       // $form = $this->createForm('AppBundle\Form\StudentsType', $student);
        $form = $this->createForm(StudentsType::class, $student,  [
            'dev' => $this->getUser()->getEtablissements()
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();

            return $this->redirectToRoute('students_show', array('id' => $student->getId()));
        }

        return $this->render('students/new.html.twig', array(
            'student' => $student,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a student entity.
     *
     * @Route("/{id}", name="students_show")
     * @Method("GET")
     */
    public function showAction(Students $student)
    {
        $deleteForm = $this->createDeleteForm($student);
        $em = $this->getDoctrine()->getManager();
        $notes = $em->getRepository('AppBundle:Notes')->findBy(
            array('students' => $student));

        //discipline
        $discipline = $em->getRepository('AppBundle:Facteurs_disciplinaires')->findBy(
            array('students' => $student));

        //all notes
        $all_notes = $em->getRepository('AppBundle:Notes')->findAll();


        return $this->render('students/show.html.twig', array(
            'student' => $student,
            'discipline' => $discipline,
            'notes'=> $notes,
            'all_notes'=> $all_notes,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing student entity.
     *
     * @Route("/{id}/edit", name="students_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Students $student)
    {
        $deleteForm = $this->createDeleteForm($student);
        $editForm = $this->createForm('AppBundle\Form\StudentsType', $student);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('students_show', array('id' => $student->getId()));
        }

        return $this->render('students/edit.html.twig', array(
            'student' => $student,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a student entity.
     *
     * @Route("/{id}", name="students_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Students $student)
    {
        $form = $this->createDeleteForm($student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($student);
            $em->flush();
        }

        return $this->redirectToRoute('students_index');
    }

    /**
     * Creates a form to delete a student entity.
     *
     * @param Students $student The student entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Students $student)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('students_delete', array('id' => $student->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     * Creates a form to delete a note entity.
     *
     * @param Notes $note The note entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteNotesForm(Notes $note)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('notes_delete', array('id' => $note->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
