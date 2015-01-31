<?php
namespace Valikent\LotBundle\Document;

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
}