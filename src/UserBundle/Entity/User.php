<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="trustscore", type="integer")
     */
    private $trustscore = 0;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set trustscore
     *
     * @param integer $trustscore
     *
     * @return User
     */
    public function setTrustscore($trustscore)
    {
        $this->trustscore = $trustscore;

        return $this;
    }

    /**
     * Get trustscore
     *
     * @return int
     */
    public function getTrustscore()
    {
        return $this->trustscore;
    }
}

