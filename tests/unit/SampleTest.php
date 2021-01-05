<?php 
use PHPUnit\Framework\TestCase;
class SampleTest extends TestCase{

    public function test_sum(){
        $a = 5;$b = 10;
        $c = $a+$b;
        $this->assertEquals($c,15);
    }


}