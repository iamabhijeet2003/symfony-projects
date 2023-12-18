<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ContactData;

class ContactsController extends AbstractController
{
    #[Route('/contact/{id<\d+>}', name: 'single_contact')]
    public function contact($id=''): Response
    {
        //Search the contact in the array
        $contacts = ContactData::getContacts();
        $contact = Array();
        foreach ($contacts as $c){
            if($c['id'] == $id) {
                $contact = $c;
                break;
            }
        }

        //Check if we have an id and a contact
        if(empty($id) ){
            $contact = null;
        } elseif (empty($contact)) {
            $contact['id'] = $id;
            $contact['name'] = null; //Set the contact's name to null to check if the contact exists
        } else {
            $phones = ContactData::getPhones();
            $contactPhones = array();
            //We need only the phone of a single contact
            foreach ($phones as $phone) {
                if ($phone['idContact'] == $id) {
                    $contactPhones[] = $phone;
                }
            }
            $contact['phones'] = $contactPhones;
        }

        return $this->render('contacts/contact.html.twig', [
            'contact' => $contact,
            'page_title' => 'My Contacts App - Contact',
        ]);
    }

    #[Route('/contact_list', name: 'contact_list')]
    public function contactList(): Response
    {
        return $this->render('contacts/list.html.twig', [
            'contacts' => ContactData::getContacts(),
            'page_title' => 'My Contacts App - Contact List'
        ]);
    }

    #[Route('/contact/delete/{id<\d+>}', name: 'delete_contact')]
public function delete_contact($id = ''): Response
{
    
    $contacts = ContactData::getContacts();

    
    $contactIndex = null;
    foreach ($contacts as $index => $contact) {
        if ($contact['id'] == $id) {
            $contactIndex = $index;
            break;
        }
    }

    
    if ($contactIndex !== null) {
        unset($contacts[$contactIndex]);
    }

    
    return $this->render('contacts/list.html.twig', [
        'contacts' => $contacts,
        'page_title' => 'My Contacts App - Contact List'
    ]);
}

}