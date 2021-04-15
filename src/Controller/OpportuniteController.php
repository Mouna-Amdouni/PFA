<?php

namespace App\Controller;

use App\Entity\Association;
use App\Entity\Opportunite;
use App\Form\OpportuniteType;
use App\Repository\AssociationRepository;
use App\Repository\OpportuniteRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/opportunite")
 */
class OpportuniteController extends AbstractController
{
    /**
     * @Route("/", name="opportunite_index", methods={"GET"})
     */
    public function index(OpportuniteRepository $opportuniteRepository): Response
    {
        return $this->render('opportunite/index.html.twig', [
            'opportunites' => $opportuniteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="opportunite_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $opportunite = new Opportunite();
        $form = $this->createForm(OpportuniteType::class, $opportunite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($opportunite);
            $entityManager->flush();

            return $this->redirectToRoute('opportunite_index');
        }

        return $this->render('opportunite/new.html.twig', [
            'opportunite' => $opportunite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="opportunite_show", methods={"GET"})
     */
    public function show(Opportunite $opportunite): Response
    {
        return $this->render('opportunite/show.html.twig', [
            'opportunite' => $opportunite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="opportunite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Opportunite $opportunite): Response
    {
        $form = $this->createForm(OpportuniteType::class, $opportunite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('opportunite_index');
        }

        return $this->render('opportunite/edit.html.twig', [
            'opportunite' => $opportunite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="opportunite_delete", methods={"POST"})
     */
    public function delete(Request $request, Opportunite $opportunite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$opportunite->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($opportunite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('opportunite_index');
    }


    ///////////////////////////*************** Proprietaire*****************////////////////
    /**
     * @Route("/newOP/{id}", name="OP_new", methods={"GET","POST"})
     */
    public function newPR($id,OpportuniteRepository $opportuniteRepository ,UserInterface $user,Request $request,EntityManagerInterface $manager): Response
    {
        $opportunite = new Opportunite();

        $form=$this->createFormBuilder($opportunite)


            ->add('titre',
                TextType::class, [
                    'required' => true,
                    'label' => "titre de votre oppoptunite",
                    'attr' => ['class' => 'form-control']
                ])
            ->add('region',
                TextType::class, [
                    'required' => true,
                    'label' => "Entrez le region ",
                    'attr' => ['class' => 'form-control']
                ])
            ->add('domaineConcerne',
                TextType::class, [
                    'required' => true,
                    'label' => "Entrez le domaine concerné",
                    'attr' => ['class' => 'form-control']
                ])
            ->add('dateLimite',
                DateType::class, [
                    'required' => true,
                    'label' => "Entrez la date limite",
                    'attr' => ['class' => 'form-control']
                ])
            ->add('image',FileType::class,['label'=>'Chargez votre image' ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'rows' => "9",
                    'cols' => "45"
                ],
                'label' => "Entrez la description detaillé de cette oportunité  "
            ])
            ->getForm();
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $file=$form->get('image')->getData();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $opportunite->setImage($fileName);
            $opportunite->setLanceur($user);
            $opportunite=$form->getData();


//            $entityManager = $this->getDoctrine()->getManager();
            $manager->persist($opportunite);
            $manager->flush();
            $this->addFlash('success', 'Opportunité  bien été enregistrée.');

            return $this->redirectToRoute('association_index');
        }

//        return $this->render("admin/association/associationform.html.twig", ['associationform'=>$form->createView(),
//            'associations' => $associationRepository->findAll(),
//            'form' => $form->createView(),
//
//        ]);
        return $this->render('opportunite/new.html.twig', [
            'opportunite' => $opportunite,
            'form' => $form->createView(),
        ]);
    }




}
