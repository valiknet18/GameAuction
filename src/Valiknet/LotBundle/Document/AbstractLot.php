<?php
namespace Valiknet\LotBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class AbstractLot
 * @package Valiknet\AuctionBundle\Document
 *
 * @ODM\Document
 * @ODM\InheritanceType("SINGLE_COLLECTION")
 * @ODM\DiscriminatorField("type")
 */
class AbstractLot
{
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @ODM\Float
     */
    protected $start_price;

    /**
     * @ODM\Float
     */
    protected $target_price;

    /**
     * @ODM\Date
     */
    protected $createdAt;

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
     * Set startPrice
     *
     * @param float $startPrice
     * @return self
     */
    public function setStartPrice($startPrice)
    {
        $this->start_price = $startPrice;
        return $this;
    }

    /**
     * Get startPrice
     *
     * @return float $startPrice
     */
    public function getStartPrice()
    {
        return $this->start_price;
    }

    /**
     * Set targetPrice
     *
     * @param float $targetPrice
     * @return self
     */
    public function setTargetPrice($targetPrice)
    {
        $this->target_price = $targetPrice;
        return $this;
    }

    /**
     * Get targetPrice
     *
     * @return float $targetPrice
     */
    public function getTargetPrice()
    {
        return $this->target_price;
    }

    /**
     * Set createdAt
     *
     * @param date $createdAt
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return date $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
