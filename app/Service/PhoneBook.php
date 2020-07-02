<?php

namespace App\Service;


use Illuminate\Support\Str;

class PhoneBook{


    public static function searchByName(string $name):array
    {
        return collect(self::contacts())->filter(function ($contact) use($name){
            return Str::contains(strtolower($contact['name']),$name);
        })->all() ;

    }

    public static function searchByCity(string $city):array
    {
        return collect(self::contacts())->filter(function ($contact) use($city){
            return Str::contains(strtolower($contact['city']), strtolower($city));
        })->all() ;
    }

    public static function search(string $city):array
    {
        return collect(self::contacts())->filter(function ($contact) use($city){
            return Str::contains(strtolower($contact['city']), strtolower($city));
        })->all() ;
    }

    public static function contacts ():array
    {
        return[

            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '7282920',
                'city' =>  'Paris, FR'
            ],
            [
                'name' => 'Jack Grealish',
                'email' => 'jackgrealish@example.com',
                'phone' => '894922920',
                'city' =>  'London, Uk'
            ],
            [
                'name' => 'Alicia Murphy',
                'email' => 'alicia@example.com',
                'phone' => '038282920',
                'city' =>  'Bamako, ML'
            ],
            [
                'name' => 'Kasseem Doe',
                'email' => 'kassim@example.com',
                'phone' => '83012920',
                'city' =>  'New York, US'
            ],
            [
                'name' => 'Calvin Graham',
                'email' => 'kassim@example.com',
                'phone' => '83012920',
                'city' =>  'New York, US'
            ],
        ];
    }

}
