<?php
namespace Valiknet\AuctionBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class AbstractLot
 * @package Valiknet\AuctionBundle\Document
 *
 * @ODM\MappedSuperclass
 */
abstract class AbstractLot
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
     * @ODM\ReferenceOne(targetDocument="Lot", cascade="all")
     */
    protected $lot;
}
