<?php 
use PHPUnit\Framework\TestCase;
use App\Models\User;
class UserTest extends TestCase{

   public function test_get_the_first_name(){
        $user = new User();
        $user->setFirstName('Ruhul Amin');
        $this->assertEquals($user->getFirstName(),'Ruhul Amin');
   }

   public function test_get_the_last_name(){
        $user = new User();
        $user->setLastName('Mohammad');
        $this->assertEquals($user->getLastName(),'Mohammad');
   }
   public function test_full_name(){
       $user = new User();
       $user->setFirstName('Mohammad');
       $user->setLastName('Ruhul Amin');
       $this->assertEquals($user->getFullName(),'Mohammad Ruhul Amin');
   }
   public function test_regular_info(){
       $user = new User();
       $user->setRegularAddress("Alfa@gmail.com","01403288711","dhaka");
       $test_info=[
            'EmailAddress'=>"Alfa@gmail.com",
            'Contact'=>"01403288711",
            'Address'=>"dhaka"
       ];

       $this->assertEquals($user->getRegularAddress(),$test_info);
   }


}