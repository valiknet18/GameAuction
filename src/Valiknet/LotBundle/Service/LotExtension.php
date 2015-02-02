<?php
namespace Valiknet\LotBundle\Service;

use Doctrine\ODM\MongoDB\DocumentManager;
use Valiknet\LotBundle\Document\FinishLot;

class LotExtension
{
    public function updateLots($lots, DocumentManager $dm)
    {
        foreach ($lots as $lot)
        {
            $dateTimeNow = new \DateTime();
            $finishTime = clone($lot->getCreatedAt());
            $finishTime = $finishTime->modify("+2 days");
            $difference = $finishTime->diff($dateTimeNow);

            if (($difference->d * 24 + $difference->h) <= 48) {
                $lot->setFinishLot(1);

                $finishLot = new FinishLot();
                $finishLot->setLot($lot);

                $dm->persist($finishLot);
            }
        }

        return $lots;
    }
}