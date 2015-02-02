<?php
namespace Valiknet\LotBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class FinishLot
 * @package Valikent\LotBundle\Document
 *
 * @ODM\Document
 */
class FinishLot
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
     * @ODM\Field(type="string")
     */
    protected $accountName;

    /**
     * @ODM\Field(type="string")
     */
    protected $accountOldPassword;

    /**
     * @ODM\Field(type="string")
     */
    protected $accountNewPassword;

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
     * Set accountName
     *
     * @param string $accountName
     * @return self
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * Get accountName
     *
     * @return string $accountName
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set accountOldPassword
     *
     * @param string $accountOldPassword
     * @return self
     */
    public function setAccountOldPassword($accountOldPassword)
    {
        $this->accountOldPassword = $accountOldPassword;
        return $this;
    }

    /**
     * Get accountOldPassword
     *
     * @return string $accountOldPassword
     */
    public function getAccountOldPassword()
    {
        return $this->accountOldPassword;
    }

    /**
     * Set accountNewPassword
     *
     * @param string $accountNewPassword
     * @return self
     */
    public function setAccountNewPassword($accountNewPassword)
    {
        $this->accountNewPassword = $accountNewPassword;
        return $this;
    }

    /**
     * Get accountNewPassword
     *
     * @return string $accountNewPassword
     */
    public function getAccountNewPassword()
    {
        return $this->accountNewPassword;
    }
}
