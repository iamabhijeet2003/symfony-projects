<?php
namespace App\Service;


class Utilities{
    public static function getWelcome(){
        return "Fidel eres un genio";
    }

    public static function today(){
        return "today es ".Date("d-m-Y");
    }
}