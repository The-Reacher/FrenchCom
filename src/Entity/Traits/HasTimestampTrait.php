<?php

namespace App\Entity\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

trait HasTimestampTrait
{
    /**
     * @gedmo\Timestampable(on="create")
     *
     * @ORM\Column(type="datetime")
     *
     * @Groups("get","Recipe:item:get")
     */
    protected ?\DateTime $createdAt;

    /**
     * @gedmo\Timestampable(on="update")
     *
     * @ORM\Column(type="datetime")
     *
     * @Groups("Recipe:item:get")
     */
    protected ?\DateTime $updatedAt;

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
