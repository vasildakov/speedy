<?php

namespace VasilDakov\SpeedyTests\Service\Track;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Track\TrackedParcelOperation;

final class TrackedParcelOperationTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $object = new TrackedParcelOperation(
            dateTime: new \DateTime(),
            operationCode: 150,
            description: 'description',
            comment: 'comment',
            place: 'place',
            additionalInfo: []
        );

        self::assertInstanceOf(TrackedParcelOperation::class, $object);
    }

    public function testItCanSetAndGetProps(): void
    {
        $object = new TrackedParcelOperation(
            dateTime: new \DateTime(),
            operationCode: 150,
            description: 'description',
            comment: 'comment',
            place: 'place',
            additionalInfo: []
        );

        $object->setDateTime(new \DateTime('now'));
        $object->setOperationCode(125);
        $object->setDescription('some new description');
        $object->setComment('some new comment');
        $object->setPlace('some new place');
        $object->setAdditionalInfo([1,2,3]);

        self::assertInstanceOf(\DateTime::class, $object->getDateTime());
        self::assertEquals(125, $object->getOperationCode());
        self::assertEquals('some new description', $object->getDescription());
        self::assertEquals('some new comment', $object->getComment());
        self::assertEquals('some new place', $object->getPlace());
        self::assertIsArray($object->getAdditionalInfo());
    }

    public function testItCanBeDeserialized(): void
    {
        $serializer = (new SerializerFactory())();

        $json = \file_get_contents('./tests/Assets/TrackedParcelOperation.json');

        $object = $serializer->deserialize($json, TrackedParcelOperation::class, 'json');

        self::assertInstanceOf(TrackedParcelOperation::class, $object);
    }
}
