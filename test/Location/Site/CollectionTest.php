<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Location\Site;

use PHPUnit\Framework\TestCase;

// the class that will be tested
use VasilDakov\Speedy\Service\Location\Site\Collection;

class CollectionTest extends TestCase
{
    /**
     * @group collection
     */
    public function testItCanBeInitialized() 
    {
        $this->assertInstanceOf(Collection::class, new Collection());
    }

    /**
     * @group collection
     */
    public function testTheCollectionIsEmpty() 
    {
        $collection = new Collection();

        $this->assertEquals(0, $collection->count());
    }

    /**
     * @group collection
     */
    public function testItemsCanBeAddedToCollection() 
    {
        $collection = new Collection();

        $object = new \stdClass();

        $collection->addItem(0, $object);
        $collection->addItem(1, $object);
        $collection->addItem(2, $object);
        $collection->addItem(3, $object);

        $this->assertEquals(4, $collection->count());
    }

    /**
     * @group collection
     */
    public function testItemCanBeDeletedFromCollection() 
    {
        // the collection is empty
        $collection = new Collection(); // $items = []

        // a new object
        $object = new \stdClass();

        // add the object to the collection
        $collection->addItem('123', $object); // $items['123] = $object;

        // the collection now should have one item
        $this->assertEquals(1, $collection->count());

        // the deleteItem method returns true on success
        $this->assertTrue($collection->deleteItem('123'));  // $items = []

        // if the item is deleted, the collection will be empty
        $this->assertTrue($collection->isEmpty());

        // just a repeat of the above
        $this->assertEquals(0, $collection->count());
    }


    /**
     * @group collection
     */
    public function testItemCanBeRetreivedFromCollection() 
    {
        $collection = new Collection(); // $items = []

        $object = new \stdClass();
        $object->name = 'Vasil Dakov';

        $collection->addItem(999, $object); 

        $item = $collection->getItem(999);
        $this->assertInstanceOf(\stdClass::class, $item);
        $this->assertEquals('Vasil Dakov', $item->name);
    }
}
