<?php
namespace Valiknet\LotBundle\Service;

use Doctrine\ODM\MongoDB\DocumentManager;
use Valikent\LotBundle\Document\FinishLot;

class LoxExtension
{
    public function updateLots($lots, DocumentManager $dm)
    {
        foreach ($lots as $lot)
        {
            $dateTimeNow = new \DateTime();
            $finishTime = clone($lot->getCreatedAt());
            $finishTime = $finishTime->modify("+2 days");
            $difference = $finishTime->diff($dateTimeNow);

            if (($difference->d * 24 + $difference->h) <= 0) {
                $lot->setCreatedAt(1);

                $finishLot = new FinishLot();
                $finishLot->setLot($lot);

                $dm->persist($finishLot);

                unset($lot);
            }
        }
    }
}