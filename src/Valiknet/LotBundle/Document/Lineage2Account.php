<?php
namespace Valiknet\LotBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class Lineage2Account
 * @package Valiknet\AuctionBundle\Document
 *
 * @ODM\Document
 */
class Lineage2Account extends AbstractLot
{
    /**
     * @ODM\String
     */
    protected $name_server;

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
     * @var boolean $finishLot
     */
    protected $finishLot;

    /**
     * @var date $createdAt
     */
    protected $createdAt;

    /**
     * @var Valiknet\UserBundle\Document\User
     */
    protected $author;


    /**
     * Set nameServer
     *
     * @param string $nameServer
     * @return self
     */
    public function setNameServer($nameServer)
    {
        $this->name_server = $nameServer;
        return $this;
    }

    /**
     * Get nameServer
     *
     * @return string $nameServer
     */
    public function getNameServer()
    {
        return $this->name_server;
    }

    /**
     * Set pathToServer
     *
     * @param string $pathToServer
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
     * @param string $realm
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
     * Set author
     *
     * @param Valiknet\UserBundle\Document\User $author
     * @return self
     */
    public function setAuthor(\Valiknet\UserBundle\Document\User $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return Valiknet\UserBundle\Document\User $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set finishLot
     *
     * @param boolean $finishLot
     * @return self
     */
    public function setFinishLot($finishLot)
    {
        $this->finishLot = $finishLot;
        return $this;
    }

    /**
     * Get finishLot
     *
     * @return boolean $finishLot
     */
    public function getFinishLot()
    {
        return $this->finishLot;
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
