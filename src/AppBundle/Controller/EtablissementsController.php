<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SectionEduc;
use AppBundle\Entity\Type_etablissements;
use AppBundle\Repository\EtablissementsRepository;
use AppBundle\Entity\Etablissements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\City;
use AppBundle\Entity\Department;
use AppBundle\Entity\Country;
use AppBundle\Entity\Regions;
use AppBundle\Entity\Addresses;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PHPExcel_IOFactory;
use AppBundle\Entity\Media;

/**
 * Etablissement controller.
 *
 * @Route("etablissements")
 */
class EtablissementsController extends Controller
{
    /**
     * Lists all etablissement entities.
     *
     * @Route("/", name="etablissements_index")
     * @Method("GET")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etablissements = $em->getRepository('AppBundle:Etablissements')->findAllWithCountry();

        return $this->render('etablissements/index.html.twig', array(
            'etablissements' => $etablissements,
        ));
    }


    /**
     * Creates a new media entity.
     *
     * @Route("/upload", name="etablissements_upload")
     * @Method({"GET", "POST"})
     */
    public function uploadEtablissementsAction(Request $request){

        $media = new Media();
        $form = $this->createForm('AppBundle\Form\MediaType', $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();
            return $this->redirectToRoute('etablissements_upload', array('id' => $media->getId()));
        }
        //debut city
        $etablissements[] = new Etablissements();
        $media1 =new Media();
        $nom_exel='etablissements';
        $em = $this->getDoctrine()->getManager();
        $media1 = $em->getRepository('AppBundle:Media')->findOneBy(array('name' => 'etablissements'));


        require_once __DIR__.'/../../../vendor/autoload.php';

        if($media1!=null){
            //ini_set('mbstring.substitute_character', "none");
            header('Content-Type: application/msexcel; charset=UTF-8');

            require_once __DIR__.'/../../../web/uploads/media/'.''.$media1->getFilename();
            $objReader = PHPExcel_IOFactory::createReaderForFile(__DIR__.'/../../../web/uploads/media/'.''.$media1->getFilename());
            //$objReader->setReadDataOnly(false); //optional



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
                //you can add your own columns B, C, D etc. Sectioneduc
                $country = new Country();
                $region = new regions();
                $department = new Department();
                $city = new City();
                $etablissement = new Etablissements();
                $addresse = new Addresses();
                $typeEtablissements = new Type_etablissements();
                $sectioneduc = new SectionEduc();


                $country->setName($objPHPExcel->getActiveSheet()->getCell("A$i")->getValue() ) ;
                $country->setCapital($objPHPExcel->getActiveSheet()->getCell("B$i")->getValue());
                $em1 = $this->getDoctrine()->getManager();
                $coun = $em1->getRepository('AppBundle:Country')->findOneBy(array(
                    'name' => $country->getName()));

                $region->setName($objPHPExcel->getActiveSheet()->getCell("C$i")->getValue());
                $region->setChefLieu($objPHPExcel->getActiveSheet()->getCell("D$i")->getValue());
                $region->setCountry($coun);

                $reg = $em1->getRepository('AppBundle:Regions')->findOneBy(array(
                    'name' => $region->getName()));
                $department->setName($objPHPExcel->getActiveSheet()->getCell("E$i")->getValue());
                $department->setChefLieu($objPHPExcel->getActiveSheet()->getCell("F$i")->getValue());
                $department->setRegions($reg);

                $depart = $em1->getRepository('AppBundle:Department')->findOneBy(array(
                    'name' => $department->getName()));
                $city->setName($objPHPExcel->getActiveSheet()->getCell("G$i")->getValue());
                $city->setDepartments($depart);

                $cit = $em1->getRepository('AppBundle:City')->findOneBy(array(
                    'name' => $city->getName()));
                $etablissement->setName($objPHPExcel->getActiveSheet()->getCell("H$i")->getValue());
                $etablissement->setSigle($objPHPExcel->getActiveSheet()->getCell("I$i")->getValue());
                $etablissement->setDescription($objPHPExcel->getActiveSheet()->getCell("J$i")->getValue());
                $etablissement->setDateCreation($objPHPExcel->getActiveSheet()->getCell("K$i")->getValue());
                $etablissement->setFilename($objPHPExcel->getActiveSheet()->getCell("L$i")->getValue());

                $addresse->setEmail($objPHPExcel->getActiveSheet()->getCell("M$i")->getValue());
                $addresse->setTel($objPHPExcel->getActiveSheet()->getCell("N$i")->getValue());
                $addresse->setBP($objPHPExcel->getActiveSheet()->getCell("O$i")->getValue());
                $addresse->setFax($objPHPExcel->getActiveSheet()->getCell("P$i")->getValue());
                $addresse->setLongitude($objPHPExcel->getActiveSheet()->getCell("Q$i")->getValue());
                $addresse->setLatitude($objPHPExcel->getActiveSheet()->getCell("R$i")->getValue());
                $etablissement->setAdresses($addresse);

                $typeEtablissements->setName($objPHPExcel->getActiveSheet()->getCell("S$i")->getValue());
                $typeEtablissements->setDescription($objPHPExcel->getActiveSheet()->getCell("T$i")->getValue());
                $etablissement->setTypeEtablissements($typeEtablissements);

                $sectioneduc->setName($objPHPExcel->getActiveSheet()->getCell("S$i")->getValue());
                $sectioneduc->setName($objPHPExcel->getActiveSheet()->getCell("S$i")->getValue());

                $etablissement->setSectioneduc(array($sectioneduc));
                $etablissement->setCity($cit);

                //inset $column_A_Value value in DB query here
                $name='';
                $name=$objPHPExcel->getActiveSheet()->getCell("A$i")->getValue();

                $entityManager = $this->getDoctrine()->getManager();

                $etablissements[$i] = $etablissement;
                // tell Doctrine you want to (eventually) save the Product (no queries yet)
                $entityManager->persist($etablissement);

                // actually executes the queries (i.e. the INSERT query)
                $entityManager->flush();


                $i++;
            }
            $em->remove($media1);
            $em->flush();

        }


        return $this->render('media/new.html.twig', array(
            'media' => $media,
            'etablissements' => $etablissements,
            'form' => $form->createView(),
        ));
    }


    /**
     * Creates a new etablissement entity.
     *
     * @Route("/new", name="etablissements_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $etablissement = new Etablissements();
        $form = $this->createForm('AppBundle\Form\EtablissementsType', $etablissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etablissement);
            $em->flush();

            return $this->redirectToRoute('etablissements_show', array('id' => $etablissement->getId()));
        }

        return $this->render('etablissements/new.html.twig', array(
            'etablissement' => $etablissement,
            'form' => $form->createView(),
        ));
    }


    /**
     * Creates a new etablissement secondaire entity.
     *
     * @Route("/news/{who}", name="etablissements_news")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")  //@Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function newsAction(Request $request, $who)
    {
        $etablissement = new Etablissements();
        $etablissement->setDateCreation(new \DateTime());
        $etablissement->setType_Etablissements($this->getDoctrine()
            ->getRepository('AppBundle\Entity\Type_etablissements')
            ->findOneBy(array('name' => $who)));
        $form = $this->createForm('AppBundle\Form\EtablissementsType', $etablissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etablissement);
            $em->flush();

            return $this->redirectToRoute('etablissements_show', array('id' => $etablissement->getId()));
        }

        return $this->render('etablissements/new.html.twig', array(
            'etablissement' => $etablissement,
            'form' => $form->createView(),
        ));
    }



    /**
     * Finds and displays a etablissement entity.
     *
     * @Route("/{id}", name="etablissements_show")
     * @Method("GET")
     */
    public function showAction(Etablissements $etablissement)
    {
        $deleteForm = $this->createDeleteForm($etablissement);

        return $this->render('etablissements/show.html.twig', array(
            'etablissement' => $etablissement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing etablissement entity.
     *
     * @Route("/{id}/edit", name="etablissements_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request)
    {
        $etablissement = $this->getDoctrine()->getRepository('AppBundle:Etablissements')
            ->findWithCountry($request->get('id'));
        $deleteForm = $this->createDeleteForm($etablissement);
        $editForm = $this->createForm('AppBundle\Form\EtablissementsType', $etablissement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('etablissements_show', array('id' => $etablissement->getId()));
        }

        return $this->render('etablissements/edit.html.twig', array(
            'etablissement' => $etablissement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a etablissement entity.
     *
     * @Route("/{id}", name="etablissements_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Etablissements $etablissement)
    {
        $form = $this->createDeleteForm($etablissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etablissement);
            $em->flush();
        }

        return $this->redirectToRoute('etablissements_index');
    }

    /**
     * Creates a form to delete a etablissement entity.
     *
     * @param Etablissements $etablissement The etablissement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Etablissements $etablissement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etablissements_delete', array('id' => $etablissement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
