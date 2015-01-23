<?php
namespace Valiknet\AuctionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class Lot
 * @package Valiknet\AuctionBundle\Document
 *
 * @ODM\Document
 */
class Lot
{
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @ODM\ReferenceOne(targetDocument="AbstractLot")
     */
    protected $lot;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lot
     *
     * @param Valiknet\AuctionBundle\Document\AbstractLot $lot
     * @return self
     */
    public function setLot(\Valiknet\AuctionBundle\Document\AbstractLot $lot)
    {
        $this->lot = $lot;
        return $this;
    }

    /**
     * Get lot
     *
     * @return Valiknet\AuctionBundle\Document\AbstractLot $lot
     */
    public function getLot()
    {
        return $this->lot;
    }
}
