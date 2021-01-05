<?php 


use PHPUnit\Framework\TestCase;
class CollectionTest extends TestCase{

    /**@test */

    public function test_empty_instantiated_collection_returns_no_items(){
        $collection = new \App\Support\Collection([]);
        $this->assertEmpty($collection->get());
    }


    /**@test */
    public function test_count_is_correct_or_not(){
        $collection = new \App\Support\Collection(['1','2','3']);
     
        $this->assertEquals($collection->count(),3);
    }
    /** @test */
    public function test_each_item(){
        $collection = new \App\Support\Collection(['1','2','3']);
        $this->assertEquals($collection->get()[0],'1');
        $this->assertEquals($collection->get()[1],'2');
    } 


}