<?php
/**
 * MIT License
 *
 * Copyright (c) 2019-2020 Julian B. Heuschen
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

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
    private $thumbnail_holder;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Product", mappedBy="images")
     */
    private $product_holder;


    public function __construct()
    {
        $this->thumbnail_holder = new ArrayCollection();
        $this->product_holder = new ArrayCollection();
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
    public function getThumbnailHolder(): Collection
    {
        return $this->thumbnail_holder;
    }

    public function addThumbnailHolder(Product $thumbnailHolder): self
    {
        if (!$this->thumbnail_holder->contains($thumbnailHolder)) {
            $this->thumbnail_holder[] = $thumbnailHolder;
            $thumbnailHolder->setThumbnail($this);
        }

        return $this;
    }

    public function removeThumbnailHolder(Product $thumbnailHolder): self
    {
        if ($this->thumbnail_holder->contains($thumbnailHolder)) {
            $this->thumbnail_holder->removeElement($thumbnailHolder);
            // set the owning side to null (unless already changed)
            if ($thumbnailHolder->getThumbnail() === $this) {
                $thumbnailHolder->setThumbnail(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProductHolder(): Collection
    {
        return $this->product_holder;
    }

    public function addProductHolder(Product $productHolder): self
    {
        if (!$this->product_holder->contains($productHolder)) {
            $this->product_holder[] = $productHolder;
            $productHolder->addImage($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->filename;
    }

    public function removeProductHolder(Product $productHolder): self
    {
        if ($this->product_holder->contains($productHolder)) {
            $this->product_holder->removeElement($productHolder);
            $productHolder->removeImage($this);
        }

        return $this;
    }

}
