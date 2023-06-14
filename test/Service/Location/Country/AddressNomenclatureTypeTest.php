<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Location\Country;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Country\AddressNomenclatureType;


/**
 * Class AddressNomenclatureTypeTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class AddressNomenclatureTypeTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $object = new AddressNomenclatureType();
        $object->setName('Name');
        $object->setNameEn('NameEn');

        $this->assertEquals('Name', $object->getName());
        $this->assertEquals('NameEn', $object->getNameEn());
    }
}
