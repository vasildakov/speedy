<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Parcel;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class ParcelTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 */
final class ParcelTest extends TestCase
{
    public function testItCanBeDeserialized(): void
    {
        $serializer = (new SerializerFactory())();

        $json = \file_get_contents('./tests/Assets/Parcel.json');

        $parcel = $serializer->deserialize($json, Parcel::class, 'json');
        //dd($parcel);

        $this->assertInstanceOf(Parcel::class, $parcel);
    }
}
