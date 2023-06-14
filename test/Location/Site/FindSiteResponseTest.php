<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Location\Site;

use PHPUnit\Framework\TestCase;

// the class that will be tested
use VasilDakov\Speedy\Service\Location\Site\FindSiteResponse;
use VasilDakov\Speedy\Model\Site;

class FindSiteResponseTest extends TestCase
{
    protected $site;

    protected function setUp() : void
    {
        // https://phpunit.readthedocs.io/en/9.5/test-doubles.html
        $this->site = $this->createMock(Site::class);
    }

    /**
     * @group collection
     */
    public function testItCanBeInitialized() 
    {
        $this->assertInstanceOf(FindSiteResponse::class, new FindSiteResponse());
    }

        /**
     * @group collection
     */
    public function testItCanAddSitesToCollection() 
    {
        // https://phpunit.readthedocs.io/en/9.5/test-doubles.html
        $this->site
             ->expects($this->once())
             ->method('getId')
             ->willReturn(999)
        ;

        $response = new FindSiteResponse();
        $this->assertTrue($response->getSites()->isEmpty());

        $response->addSite($this->site);
        $this->assertFalse($response->getSites()->isEmpty());

    }

}