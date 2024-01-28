<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Contact;
use App\Entity\Phone;

class PhoneController extends AbstractController
{
    #[Route('/phone', name: 'app_phone')]
    public function index(): Response
    {
        return $this->render('phone/index.html.twig', [
            'controller_name' => 'PhoneController',
        ]);
    }
    #[Route('/phone/test/new/{id<\d+>}/{number}/{type}', name: 'new_phone')]
public function newPhone(EntityManagerInterface $entityManager, $id='',
    $number='',$type=''):Response
{
    $contact = $entityManager->getRepository(Contact::class)->find($id);
    if($contact == null) {
        return $this->render('phone/new_edit_phone.html.twig', [
        'contact'=> $contact,
        'phone' => null,
        'action' => 'Contact not found',
        'page_title' => 'My Contacts App - New phone',
        ]);
    } else {
    $phone = new Phone();
    $phone->setIdContact($contact);
    $phone->setNumber($number);
    $phone->setType($type);
    $entityManager->persist($phone);
    $entityManager->flush();
    $action = ($phone ? 'New phone added' : 'Failed to add phone');
    return $this->render('phone/new_edit_phone.html.twig', [
    'phone' => $phone,
    'contact' => $contact,
    'action' => $action,
    'page_title' => 'My Contacts App - New phone',
    ]);
    }
}
#[Route('/phone/test/edit/{id<\d+>}/{number}/{newnumber}', name: 'phone_edit')]
public function updatePhone(EntityManagerInterface $entityManager, $id='',
$number='',$newnumber=''): Response
{
$contact = $entityManager->getRepository(Contact::class)->find($id);
if($contact == null) {
return $this->render('phone/new_edit_phone.html.twig', [
'contact'=> $contact,
'phone' => null,
'page_title' => 'My Contacts App - New phone',
'action' => 'Failed to modify phone: no contact found'
]);
} else {
$phone = $entityManager->getRepository(Phone::class)
->findOneBy(['number'=>$number, 'id_contact'=>$id]);
if($phone) {
$phone->setNumber($newnumber);
$entityManager->flush();
$action = "Phone updated";
} else {
$action = "Failed to modify phone";
}
return $this->render('phone/new_edit_phone.html.twig', [
'phone' => $phone,
'contact' => $contact,
'page_title' => 'My Contacts App - Update phone',
'action' => $action
]);
}
}
#[Route('/phone/test/delete/{id<\d+>}/{number}', name: 'phone_delete')]
public function deletePhone(EntityManagerInterface $entityManager, $id='',
$number=''): Response
{
$contact = $entityManager->getRepository(Contact::class)->find($id);
if($contact == null) {
return $this->render('phone/new_edit_phone.html.twig', [
'contact'=> $contact,
'phone' => null,
'page_title' => 'My Contacts App - New phone',
'action' => 'Failed to delete phone: no contact found'
]);
} else {
$phone = $entityManager->getRepository(Phone::class)
->findOneBy(['number'=>$number, 'id_contact'=>$id]);
if($phone) {
$entityManager->remove($phone);
$entityManager->flush();
$action = "Phone deleted";
} else {
$action = "Failed to delete phone";
}
return $this->render('phone/new_edit_phone.html.twig', [
'phone' => $phone,
'contact' => $contact,
'page_title' => 'My Contacts App - Delete phone',
'action' => $action
]);
}
}
}
