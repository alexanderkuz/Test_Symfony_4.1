<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AaaRepository")
 */
class Aaa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="uuid_varbinary_type")
     */
    private $user_id;

    /**
     * @ORM\Column(type="uuid_varbinary_type", nullable=true)
     */
    private $u_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getUId()
    {
        return $this->u_id;
    }

    public function setUId($u_id): self
    {
        $this->u_id = $u_id;

        return $this;
    }
}
