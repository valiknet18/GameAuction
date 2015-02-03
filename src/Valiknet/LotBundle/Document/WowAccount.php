<?php
namespace Valiknet\LotBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @var string $description
     */
    protected $description;

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
}
