<?php
namespace Valiknet\UserBundle\Document;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class User
 * @package Valiknet\UserBundle\Document
 *
 * @ODM\Document
 */
class User extends BaseUser
{
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @ODM\ReferenceMany(targetDocument="Valiknet\LotBundle\Document\AbstractLot")
     */
    protected $lots;

    /**
     * @ODM\ReferenceMany(targetDocument="Valiknet\LotBundle\Document\Rate")
     */
    protected $rates;
    public function __construct()
    {
        $this->lots = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rates = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add lot
     *
     * @param Valiknet\LotBundle\Document\AbstractLot $lot
     */
    public function addLot(\Valiknet\LotBundle\Document\AbstractLot $lot)
    {
        $this->lots[] = $lot;
    }

    /**
     * Remove lot
     *
     * @param Valiknet\LotBundle\Document\AbstractLot $lot
     */
    public function removeLot(\Valiknet\LotBundle\Document\AbstractLot $lot)
    {
        $this->lots->removeElement($lot);
    }

    /**
     * Get lots
     *
     * @return Doctrine\Common\Collections\Collection $lots
     */
    public function getLots()
    {
        return $this->lots;
    }

    /**
     * Add rate
     *
     * @param Valiknet\LotBundle\Document\Rate $rate
     */
    public function addRate(\Valiknet\LotBundle\Document\Rate $rate)
    {
        $this->rates[] = $rate;
    }

    /**
     * Remove rate
     *
     * @param Valiknet\LotBundle\Document\Rate $rate
     */
    public function removeRate(\Valiknet\LotBundle\Document\Rate $rate)
    {
        $this->rates->removeElement($rate);
    }

    /**
     * Get rates
     *
     * @return Doctrine\Common\Collections\Collection $rates
     */
    public function getRates()
    {
        return $this->rates;
    }
}
