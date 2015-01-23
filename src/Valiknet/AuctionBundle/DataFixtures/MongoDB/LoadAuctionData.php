<?php
namespace Valiknet\AuctionBundle\DataFixtures\MongoDB;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;

class LoadAuctionData extends DataFixtureLoader
{
    public function getFixtures()
    {
        return [
            __DIR__."/fixtures.yml"
        ];
    }
}
