<?php

namespace App;

class User
{   
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $email;
    /**
     * @var address
     */
    private $address;
    /**
     * @var int
     */
    private $phone;
    /**
     * @var string
     */
    private $website;
    /**
     * @var string
     */
    private $company;

 /**
  *
  * @param integer $id
  * @return User
  */
public function setId(int $id)
{
    $this->id=$id;
}
/**
     * @return mixed
     */
public function getId()
{
    return $this->id;
}
/** 
 * @var string
 */
public function setName($name)
{
    $this->name=$name;
    
}

public function getName()
{
    return $this->name;
}
/**
 * @var string
 */
public function setUsername($username)
{
    $this->username=$username;
}
public function getUsername()
{
    return $this->username;
}
/**
 * @var string
 */
public function setEmail($email)
{
    $this->email=$email;
}
public function getEmail()
{
    return $this->email;
}
/**
 * @var adrress
 */
public function setAddress(Address $address)
{
    $this->address= $address;
}
public function getAddress()
{
    return $this->address;
}
/**
 * @var int
 */
public function setPhone($phone)
{
    $this->phone=$phone;
}
public function getPhone()
{
    return $this->phone;
}
/**
 * @var string
 */
public function setWebsite($website)
{
    $this->website=$website;
}
public function getWebsite()
{
    return $this->website;
}
/**
 * @var string
 */
public function setCompany($company)
{
    $this->company=$company;
}
public function getCompany()
{
    return $this->company;
}
}


?>