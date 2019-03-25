<?php

namespace App;


class UsersCollection

{   
    private $users =[];


    public function __construct(array $data=[] )
    {     
        foreach ($data as $item) {
           $user=new User;
           $user->setName($item->name);
           $user->setId($item->id);
           $user->setUsername($item->username);
           $address=new Address;
           
                $address->setStreet($item->address->street);
                $address->setSuite($item->address->suite);
                $address->setCity($item->address->city);
                $address->setZipcode($item->address->zipcode);
                $address->setGeo($item->address->geo);
                    $geo=new Geo;
                        $geo->setLat($item->address->geo->lat);
                        $geo->setLng($item->address->geo->lng);
                        $address->setGeo($geo);
                        $user->setAddress($address);
           $user->setPhone($item->phone);
           $user->setWebsite($item->website);
           $user->setCompany($item->company);
           $this->users[]=$user;
            
        }

        var_dump($this->users);
    }
    
    public function getIterator()
    {
        return new \arrayIterator($this->users);
    }
}