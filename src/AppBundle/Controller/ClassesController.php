<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Classes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PHPExcel_IOFactory;
use AppBundle\Entity\Media;


/**
 * Class controller.
 *
 * @Route("classes")
 */
class ClassesController extends Controller
{
    /**
     * Lists all class entities.
     *
     * @Route("/", name="classes_index")
     * @Method("GET")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')") //$this->getUser()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $classes = $em->getRepository('AppBundle:Classes')->findAll();

        return $this->render('classes/index1.html.twig', array(
            'classes' => $classes,
        ));
    }

    /**
     * Creates a new medium entity.
     *
     * @Route("/upload", name="classes_upload")
     * @Method({"GET", "POST"})
     */
    public function uploadMatieresAction(Request $request)
    {
        $media = new Media();
        $form = $this->createForm('AppBundle\Form\MediaType', $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();
            return $this->redirectToRoute('classes_upload', array('id' => $media->getId()));
        }


        $classes[] = new Classes();
        $media1 =new Media();
        $nom_exel='classes';
        $em = $this->getDoctrine()->getManager();
        $media1 = $em->getRepository('AppBundle:Media')->findOneBy(array('name' => 'classes'));

        require_once __DIR__.'/../../../vendor/autoload.php';

        if($media1!=null){
            //header('Content-Type: application/msexcel; charset=UTF-8');
            header("Content-Type: text/html; charset=utf-8");
            require_once __DIR__.'/../../../web/uploads/media/'.''.$media1->getFilename();
            $objReader = PHPExcel_IOFactory::createReaderForFile(__DIR__.'/../../../web/uploads/media/'.''.$media1->getFilename());
            $objPHPExcel = $objReader->load(__DIR__.'/../../../web/uploads/media/'.''.$media1->getFilename());
            $objWorksheet = $objPHPExcel->getActiveSheet();
//read on webpagee
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
            $spreadsheet = $reader->load(__DIR__.'/../../../web/uploads/media/'.''.$media1->getFilename());

            $worksheet = $spreadsheet->getActiveSheet();
            // Get the highest row and column numbers referenced in the worksheet
            $highestRow = $worksheet->getHighestRow(); // e.g. 10
            $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
            $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5


            echo '<table>' . "\n";
            for ($row = 1; $row <= $highestRow; ++$row) {
                echo '<tr>' . PHP_EOL;
                for ($col = 1; $col <= $highestColumnIndex; ++$col) {
                    $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
                    echo '<td>' . $value . '</td>' . PHP_EOL;
                }
                echo '</tr>' . PHP_EOL;
            }
            echo '</table>' . PHP_EOL;
//end read



            $i=1;

            foreach ($objWorksheet->getRowIterator() as $row) {
                // $column_A_Value = $objPHPExcel->getActiveSheet()->getCell("A$i")->getValue();//column A
                //you can add your own columns B, C, D etc.

                $classe = new Classes();
                $em1 = $this->getDoctrine()->getManager();

                //etablissements
                $etsGet =  $objPHPExcel->getActiveSheet()->getCell("A$i")->getValue();
                $ets = $em1->getRepository('AppBundle:Etablissements')->findOneBy(array(
                    'name' => $etsGet));
                $classe->setEtablissements($ets);

                //niveau
                $levelGet =  $objPHPExcel->getActiveSheet()->getCell("B$i")->getValue();
                $level = $em1->getRepository('AppBundle:Niveau')->findOneBy(array(
                    'name' => $levelGet));
                $classe->setNiveau($level);

                $classe->setName(  $objPHPExcel->getActiveSheet()->getCell("C$i")->getValue() ) ;

                //inset $column_A_Value value in DB query here
                $name='';
                $name=$objPHPExcel->getActiveSheet()->getCell("A$i")->getValue();


                $entityManager = $this->getDoctrine()->getManager();

                $classes[$i] = $classe;
                // tell Doctrine you want to (eventually) save the Product (no queries yet)
                $entityManager->persist($classe);

                // actually executes the queries (i.e. the INSERT query)
                $entityManager->flush();


                $i++;
            }
            $em->remove($media1);
            $em->flush();

        }
        return $this->render('media/new.html.twig', array(
            'media' => $media,
            'classes' => $classes,
            'form' => $form->createView(),
        ));

    }


    /**
     * Lists all class entities per school.
     *
     * @Route("/{flo}", name="classes_index1")
     * @Method("GET")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function index1Action($flo)
    {
        $em = $this->getDoctrine()->getManager();


        $classes = $em->getRepository('AppBundle:Classes')->findAll();

        return $this->render('classes/index.html.twig', array(
            'classes' => $classes,
            'flo' => $flo
        ));
    }

    /**
     * Creates a new class entity.
     *
     * @Route("/new", name="classes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $class = new Classes();
        $form = $this->createForm('AppBundle\Form\ClassesType', $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($class);
            $em->flush();

            return $this->redirectToRoute('classes_show', array('id' => $class->getId()));
        }

        return $this->render('classes/new.html.twig', array(
            'class' => $class,
            'form' => $form->createView(),
        ));
    }


    /**
     * Creates a new class entity base on a particular school.
     *
     * @Route("/new/{dev}", name="classes_newid")
     * @Method({"GET", "POST"})
     */
    public function newidAction(Request $request, $dev)
    {
        $class = new Classes();
        $class->setEtablissements($this->getDoctrine()
            ->getRepository('AppBundle\Entity\Etablissements')
            ->findOneBy(array('name' => $dev)));
        /*var_dump($class);
        die();*/
        $form = $this->createForm('AppBundle\Form\ClassesType', $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($class);
            $classes = $em->getRepository('AppBundle:Classes')->findBy(array('etablissements'=>$class->getEtablissements() ,
                'niveau' => $class->getNiveau(),
                'name'=> $class->getName()));
            if($classes){
                // Adding an error type message
                $this->addFlash("warming", "cette classe existe déjà, changé le numéro de la classe");



                return $this->redirectToRoute('classes_newid', array('dev' => $dev));
            };

            $em->flush();
            return $this->redirectToRoute('classes_show', array('id' => $class->getId()));
        }

        return $this->render('classes/new.html.twig', array(
            'class' => $class,
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a class entity.
     *
     * @Route("/{id}", name="classes_show")
     * @Method("GET")
     */
    public function showAction(Classes $class)
    {
        $deleteForm = $this->createDeleteForm($class);

        return $this->render('classes/show.html.twig', array(
            'class' => $class,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing class entity.
     *
     * @Route("/{id}/edit", name="classes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Classes $class)
    {
        $deleteForm = $this->createDeleteForm($class);
        $editForm = $this->createForm('AppBundle\Form\ClassesType', $class);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('classes_show', array('id' => $class->getId()));
        }

        return $this->render('classes/edit.html.twig', array(
            'class' => $class,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a class entity.
     *
     * @Route("/{id}", name="classes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Classes $class)
    {
        $form = $this->createDeleteForm($class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($class);
            $em->flush();
        }

        return $this->redirectToRoute('classes_index');
    }

    /**
     * Creates a form to delete a class entity.
     *
     * @param Classes $class The class entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Classes $class)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('classes_delete', array('id' => $class->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
