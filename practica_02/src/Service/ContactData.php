<?php
//src/Service/ContactData.php
namespace App\Service;
class ContactData
{

    private static array $contacts = array(
    array("id"=> 11, "title"=> "Mr.", "name"=> "Mike", "surname"=>"Molina","birthdate"=>"1975-10-21", "email"=>"molina@mail.com", "city"=>"valencia"),
    array("id"=> 12, "title"=> "Mrs.", "name"=> "Mary Jane", "surname"=>"Smith","birthdate"=>"1986-05-22", "email"=>"mj@mail.com","city"=>"sueca"),
    array("id"=> 13, "title"=> "Mr.", "name"=> "Arthur", "surname"=>"McFly","birthdate"=>"1990-08-14", "email"=>"mcfly@mail.com","city"=>"cullera"),
    array("id"=> 9, "title"=> "Miss", "name"=> "Lory", "surname"=>"Grimes","birthdate"=>"1967-02-08", "email"=>"logrimes@mail.com","city"=>"perellonet")
    );

    private static array $phones =array(
        array("idContact"=>11, "number"=>"666557744", "type"=>"Mobile"),
        array("idContact"=>11, "number"=>"295667788", "type"=>"Land line"),
        array("idContact"=>13, "number"=>"667889900", "type"=>"Work"),
        array("idContact"=>9, "number"=>"664444666", "type"=>"Work"),
        array("idContact"=>9, "number"=>"667889888", "type"=>"Mobile")
    );
    public static function getContacts(): array
    {
        return self::$contacts;
    }

    public static function getPhones(): array
    {
        return self::$phones;
    }
}