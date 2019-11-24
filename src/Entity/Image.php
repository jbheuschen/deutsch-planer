<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $path;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mime;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="thumbnail")
     */
    private $thumbnail_holders;

    public function __construct()
    {
        $this->thumbnail_holders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getMime(): ?string
    {
        return $this->mime;
    }

    public function setMime(string $mime): self
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * @return Collection|Product[]
     */
    public function getThumbnailHolders(): Collection
    {
        return $this->thumbnail_holders;
    }

    public function addThumbnailHolder(Product $thumbnailHolder): self
    {
        if (!$this->thumbnail_holders->contains($thumbnailHolder)) {
            $this->thumbnail_holders[] = $thumbnailHolder;
            $thumbnailHolder->setThumbnail($this);
        }

        return $this;
    }

    public function removeThumbnailHolder(Product $thumbnailHolder): self
    {
        if ($this->thumbnail_holders->contains($thumbnailHolder)) {
            $this->thumbnail_holders->removeElement($thumbnailHolder);
            // set the owning side to null (unless already changed)
            if ($thumbnailHolder->getThumbnail() === $this) {
                $thumbnailHolder->setThumbnail(null);
            }
        }

        return $this;
    }
}
