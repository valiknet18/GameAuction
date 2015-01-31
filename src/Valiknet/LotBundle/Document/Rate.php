<?php
namespace Valiknet\LotBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class Rate
 * @package Valiknet\LotBundle\Document
 *
 * @ODM\Document
 */
class Rate
{
    /**
     * @var int $id
     *
     * @ODM\Id
     */
    protected $id;

    /**
     * @var float $price
     *
     * @ODM\Field(type="float")
     */
    protected $price;

    /**
     * @ODM\ReferenceOne(targetDocument="Valiknet\UserBundle\Document\User")
     */
    protected $user;

    /**
     * @ODM\ReferenceOne(targetDocument="AbstractLot")
     */
    protected $lot;

    /**
     * @var date $createdAt
     *
     * @ODM\Field(type="date")
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
     * Set price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set user
     *
     * @param Valiknet\UserBundle\Document\User $user
     * @return self
     */
    public function setUser(\Valiknet\UserBundle\Document\User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Valiknet\UserBundle\Document\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set lot
     *
     * @param Valiknet\LotBundle\Document\AbstractLot $lot
     * @return self
     */
    public function setLot(\Valiknet\LotBundle\Document\AbstractLot $lot)
    {
        $this->lot = $lot;
        return $this;
    }

    /**
     * Get lot
     *
     * @return Valiknet\LotBundle\Document\AbstractLot $lot
     */
    public function getLot()
    {
        return $this->lot;
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
