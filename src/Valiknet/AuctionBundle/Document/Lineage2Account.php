<?php
namespace Valiknet\AuctionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

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
    protected $pathToServer;

    /**
     * @ODM\String
     */
    protected $realm;

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
     * @var Valiknet\AuctionBundle\Document\Lot
     */
    protected $lot;

    /**
     * @ODM\Id
     */
    protected $id;


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
}
