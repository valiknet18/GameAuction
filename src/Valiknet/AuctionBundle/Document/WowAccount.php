<?php
namespace Valiknet\AuctionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class WowAccount
 * @package Valiknet\AuctionBundle\Document
 *
 * @ODM\Document
 */
class WowAccount extends AbstractLot
{
    /**
     * @ODM\String
     */
    protected $pathToServer;

    /**
     * @ODM\String
     */
    protected $realm;

    /**
     * @var $id
     */
    protected $id;

    /**
     * @var float $start_price
     */
    protected $start_price;

    /**
     * @var float $target_price
     */
    protected $target_price;

    /**
     * @var date $createdAt
     */
    protected $createdAt;

    /**
     * Set pathToServer
     *
     * @param  string $pathToServer
     * @return self
     */
    public function setPathToServer($pathToServer)
    {
        $this->pathToServer = $pathToServer;

        return $this;
    }

    /**
     * Get pathToServer
     *
     * @return string $pathToServer
     */
    public function getPathToServer()
    {
        return $this->pathToServer;
    }

    /**
     * Set realm
     *
     * @param  string $realm
     * @return self
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * Get realm
     *
     * @return string $realm
     */
    public function getRealm()
    {
        return $this->realm;
    }

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
     * @param  float $startPrice
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
     * @param  float $targetPrice
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
     * @param  date $createdAt
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
