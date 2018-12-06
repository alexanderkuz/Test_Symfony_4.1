<?php



namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Doctrine\DBAL\Types\Type;
/**
 * @ORM\Entity(repositoryClass="App\Repository\User\UserRepository")
 */
class User
{


    /**
     * @var \Ramsey\Uuid\UuidInterface
     *
     * @ORM\Id
     * @ORM\Column(type="uuid_varbinary_type", unique=true, length=16)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidOrderedTimeGenerator")
     */

    private $id;

    /**
     * @ORM\Column(type="uuid_varbinary_type",length=16)
     */
    private $CoId;


    /**
     * @ORM\Column(type="uuid_varbinary_type")
     */
    private $user_id;

    /**
     * @return UuidInterface
     */
    public function getId()
    {
        return $this->id;
    }

    public function getCoId()
    {
        return $this->CoId;
    }

    public function setCoId($CoId): self
    {
        $this->CoId = $CoId;

        return $this;
    }


}
