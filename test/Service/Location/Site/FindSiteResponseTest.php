<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Location\Site;

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
        $this->assertInstanceOf(FindSiteResponse::class, new FindSiteResponse());
    }
}
