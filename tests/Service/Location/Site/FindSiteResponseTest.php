<?php

declare(strict_types=1);

namespace VasilDakov\tests\Service\Location\Site;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Site;
use VasilDakov\Speedy\Service\Location\Site\FindSiteResponse;

// the class that will be tested

class FindSiteResponseTest extends TestCase
{
    protected Site $site;

    protected function setUp(): void
    {
        $this->site = $this->createMock(Site::class);
    }

    /**
     * @group collection
     */
    public function testItCanBeInitialized(): void
    {
        $instance = new FindSiteResponse();
        $instance->setError(null);

        $this->assertInstanceOf(FindSiteResponse::class, $instance);

        $this->assertInstanceOf(ArrayCollection::class, $instance->getSites());

        $this->assertIsArray($instance->toArray());
    }
}
