<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Location\Site;

use PHPUnit\Framework\TestCase;
// the class that will be tested
use VasilDakov\Speedy\Service\Location\Site\FindSiteResponse;
use VasilDakov\Speedy\Model\Site;

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
