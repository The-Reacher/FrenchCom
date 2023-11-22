<?php

namespace App\Entity;

use App\Entity\Traits\HasIdTrait;
use App\Repository\LinkHasCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LinkHasCategoryRepository::class)
 */
class LinkHasCategory
{
    use HasIdTrait;

    /**
     * @ORM\ManyToOne(targetEntity=CategoryGroup::class, inversedBy="linkHasCategories")
     */
    private ?CategoryGroup $categoryGroup;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="linkHasCategories")
     */
    private ?Category $category;

    /**
     * @ORM\ManyToOne(targetEntity=Link::class, inversedBy="linkHasCategories")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Link $link;

    public function getCategoryGroup(): ?CategoryGroup
    {
        return $this->categoryGroup;
    }

    public function setCategoryGroup(?CategoryGroup $categoryGroup): self
    {
        $this->categoryGroup = $categoryGroup;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getLink(): ?Link
    {
        return $this->link;
    }

    public function setLink(?Link $link): self
    {
        $this->link = $link;

        return $this;
    }
}