<?php 
namespace App\Models;
class User{

   private $first_name;
   private $last_name;
   private $email_address;
   private $contact;
   private $address;

    public function setRegularAddress($email,$contact,$address){
        $this->email_address = $email;
        $this->contact = $contact;
        $this->address = $address;
    }

    public function getRegularAddress(){
        return [
            'EmailAddress'=>$this->email_address,
            'Contact'=>$this->contact,
            'Address'=>$this->address
        ];
    }

   public function setFirstName($firstName){
       $this->first_name = $firstName;
   }
   public function getFirstName(){
        return $this->first_name;
    }


   public function setLastName($lastName){
       $this->last_name = $lastName;
   }
   

   public function getLastName(){
        return $this->last_name;
   }

   public function getFullName(){
      return "$this->first_name $this->last_name";
      
   }



  


}