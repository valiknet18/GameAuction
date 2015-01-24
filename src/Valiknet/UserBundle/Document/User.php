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
}
