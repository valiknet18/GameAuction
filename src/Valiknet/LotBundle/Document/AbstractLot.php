<?php
namespace Valiknet\LotBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class AbstractLot
 * @package Valiknet\AuctionBundle\Document
 *
 * @ODM\Document
 * @ODM\InheritanceType("SINGLE_COLLECTION")
 * @ODM\DiscriminatorField("type")
 * @ODM\HasLifecycleCallbacks()
 */
class AbstractLot
{
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @ODM\Field(type="float")
     */
    protected $start_price;

    /**
     * @ODM\Field(type="float")
     */
    protected $target_price;

    /**
     * @ODM\Field(type="string")
     */
    protected $description;

    /**
     * @ODM\ReferenceOne(targetDocument="Valiknet\UserBundle\Document\User")
     */
    protected $author;

    /**
     * @ODM\Field(type="boolean")
     */
    protected $finishLot;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ODM\Field(type="date")
     */
    protected $createdAt;

    /**
     * @ODM\postLoad()
     */
    public function changeLotStatus()
    {
        $dateTimeNow = new \DateTime();
        $finishTime = clone($this->createdAt);
        $finishTime = $finishTime->modify("+2 days");
        $difference = $finishTime->diff($dateTimeNow);

        if (($difference->d * 24 + $difference->h) <= 0) {
            $this->finishLot = 1;
        }
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

    /**
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
}
