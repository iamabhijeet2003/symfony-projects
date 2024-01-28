<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Contact;
use App\Entity\Phone;
use DateTime;

class ContactController extends AbstractController
{
     #[Rest\Get('/contact/{id<\d+>}', name: 'single_contact')]
    public function contact(EntityManagerInterface $entityManager, $id=''): JsonResponse
    {
        $contact = $entityManager->getRepository(Contact::class)->find($id);
        if($contact) {
            $contactArray = $contact->toArray();
            $response = [
                'ok' => true,
                'contact' => $contactArray
            ];
        }
        else {
            $response = [
                'ok' => false,
                'error' => "The contact doesn't exist"
            ];
        }
        return new JsonResponse($response);

    }

    /*
    #[Route('/contact/searchname/{name}', name: 'contact_byname')]
    public function contactbyname(EntityManagerInterface $entityManager, $name=''): Response
    {
        $contacts = $entityManager->getRepository(Contact::class)->findBy(["name"=>$name]);
        return $this->render('contact/contact.list.html.twig', [
            'contacts' => $contacts,
            'page_title' => 'My Contacts App',
        ]);
    }
    #[Route('/contact/search/{text}', name: 'contact_bytext')]
    public function contactbytext(EntityManagerInterface $entityManager, $text=''): Response
    {
        $contacts = $entityManager->getRepository(Contact::class)->findByNameOrSurname($text);
        return $this->render('contact/contact.list.html.twig', [
            'contacts' => $contacts,
            'page_title' => 'My Contacts App',
        ]);
    }
    */
    #[Rest\Get('/contacts', name: 'contact_list')]
    public function contactList(EntityManagerInterface $entityManager):JsonResponse
    {
        $contacts=$entityManager->getRepository(Contact::class)->findAll();
        $contactsArray=array();
        if($contacts) {
            foreach($contacts as $contact) {
                array_push($contactsArray,$contact->toArray());
            }
            $response = [
                'ok' => true,
                'contacts' => $contactsArray
            ];
        }
        else {
            $response = [
                'ok' => false,
                'error' => "The tables Contact is empty"
            ];
        }
        return new JsonResponse($response);
        
    }
    #[Rest\Get('/contact/{name}', name: 'contact_list_by_name')]
    public function contactListByName(EntityManagerInterface $entityManager,$name=""):JsonResponse
    {
        $contacts=$entityManager->getRepository(Contact::class)->findBy(['name'=>$name]);
        $contactsArray=array();
        if($contacts) {
            foreach($contacts as $contact) {
                array_push($contactsArray,$contact->toArray());
            }
            $response = [
                'ok' => true,
                'contacts' => $contactsArray
            ];
        }
        else {
            $response = [
                'ok' => false,
                'error' => "No contacts with this name"
            ];
        }
        return new JsonResponse($response);
        
    }
    #[Rest\Post('/contact', name: 'new_contact')]
    public function newContact(EntityManagerInterface $entityManager) : JsonResponse {
        $params = json_decode(file_get_contents("php://input"),true);
        $title=trim(strip_tags($params['title']));
        $name=trim(strip_tags($params['name']));
        $surname=trim(strip_tags($params['surname']));
        $birthdate=trim(strip_tags($params['birthdate']));
        $email=trim(strip_tags($params['email']));

        $contact = new Contact();
        $contact->setTitle($title);
        $contact->setName($name);
        $contact->setSurname($surname);
        $date = DateTime::createFromFormat('Y-m-d', $birthdate);
        if($date) {
            $contact->setBirthdate($date);
        }
        else {
            $date = DateTime::createFromFormat('Y-m-d',time());
            $contact->setBirthdate($date);
        }
        $contact->setEmail($email);
        $entityManager->persist($contact);
        $entityManager->flush();
        $response = [
            'ok' => true,
            'message' => "Contact added"
            ];
        return new JsonResponse($response);
    }
    #[Rest\Put('/contact/{id<\d+>}', name: 'contact_edit')]
    public function updateContact(EntityManagerInterface $entityManager,$id='') : JsonResponse {
        $params = json_decode(file_get_contents("php://input"),true);
        $name=trim(strip_tags($params['name']));
        $surname=trim(strip_tags($params['surname']));
        $birthdate=trim(strip_tags($params['birthdate']));
        $email=trim(strip_tags($params['email']));

        $contact = $entityManager->getRepository(Contact::class)->find($id);
        if($contact) {
            $contact->setName($name);
            $contact->setSurname($surname);
            $date = DateTime::createFromFormat('Y-m-d', $birthdate);
            $contact->setEmail($email);
            if($date) {
                $contact->setBirthdate($date);
            }
            $entityManager->flush();
            $response = [
                'ok' => true,
                'message' => "Contact updated"
                ];
        //$contact->setName($name);
        //$entityManager->flush();
        } else {
                $response = [
                'ok' => false,
                'error' => "The contact doesn't exist"
                ];
        }
        return new JsonResponse($response);
    }
    #[Rest\Delete('/contact/{id<\d+>}', name: 'contact_delete')]
    public function deleteContact(EntityManagerInterface $entityManager,
    $id=''): JsonResponse {
    $contact = $entityManager->getRepository(Contact::class)->find($id);
    if($contact) {
        //Remove the phones
        $phones = $entityManager->getRepository(Phone::class)
        ->findBy(['id_contact'=>$id]);
        foreach ($phones as $phone){
        $entityManager->remove($phone);
        }
        $entityManager->remove($contact);
        $entityManager->flush();
        $response = [
            'ok' => true,
            'message' => "Contact deleted"
        ];
    } else {
        $response = [
            'ok' => false,
            'message' => "Failed to delete contact"
        ];
    }
    return new JsonResponse($response);
}
#[Rest\Put('/contact/addphone/{id<\d+>}', name: 'contact_addphone')]
    public function updateContactAddPhone(EntityManagerInterface $entityManager,$id='') : JsonResponse {
        $params = json_decode(file_get_contents("php://input"),true);
        $number=trim(strip_tags($params['number']));
        $type=trim(strip_tags($params['type']));
        $phone=new Phone();
        $phone->setNumber($number);
        $phone->setType($type);
        $contact = $entityManager->getRepository(Contact::class)->find($id);
        if($contact) {
            $contact->addPhone($phone);
            $entityManager->flush();
            $response = [
                'ok' => true,
                'message' => "Phone added"
                ];
        //$contact->setName($name);
        //$entityManager->flush();
        } else {
                $response = [
                'ok' => false,
                'error' => "The contact doesn't exist"
                ];
        }
        return new JsonResponse($response);
    }
    #[Rest\Put('/contact/deletephone/{id<\d+>}', name: 'contact_deletephone')]
    public function updateContactDeletePhone(EntityManagerInterface $entityManager,$id='') : JsonResponse {
        $params = json_decode(file_get_contents("php://input"),true);
        $number=trim(strip_tags($params['number']));
        $type=trim(strip_tags($params['type']));
        
        $contact = $entityManager->getRepository(Contact::class)->find($id);

        if($contact) {
            $phone = $entityManager->getRepository(Phone::class)->find(array("id_contact"=>$contact,"number"=>$number));
            if($phone) {
                $contact->removePhone($phone);
                $entityManager->remove($phone);
                $entityManager->flush();
                $response = [
                    'ok' => true,
                    'message' => "Phone removed"
                    ];
            }
            else {
                $response = [
                    'ok' => false,
                    'message' => "The phone doesn't exist"
                ];
            }
        //$contact->setName($name);
        //$entityManager->flush();
        } else {
                $response = [
                'ok' => false,
                'error' => "The contact doesn't exist"
                ];
        }
        return new JsonResponse($response);
    }
}