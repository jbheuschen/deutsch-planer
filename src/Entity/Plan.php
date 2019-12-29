<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlanRepository")
 */
class Plan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $badge;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $badge_color;

    /**
     * @ORM\Column(type="array")
     */
    private $features = [];

    /**
     * @ORM\Column(type="float")
     */
    private $price_cloud;

    /**
     * @ORM\Column(type="float")
     */
    private $price_self;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $custom_text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBadge(): ?string
    {
        return $this->badge;
    }

    public function setBadge(?string $badge): self
    {
        $this->badge = $badge;

        return $this;
    }

    public function getBadgeColor(): ?string
    {
        return $this->badge_color;
    }

    public function setBadgeColor(?string $badge_color): self
    {
        $this->badge_color = $badge_color;

        return $this;
    }

    public function getFeatures(): ?array
    {
        return $this->features;
    }

    public function setFeatures(array $features): self
    {
        $this->features = $features;

        return $this;
    }

    public function getPriceCloud(): ?float
    {
        return $this->price_cloud;
    }

    public function setPriceCloud(float $price_cloud): self
    {
        $this->price_cloud = $price_cloud;

        return $this;
    }

    public function getPriceSelf(): ?float
    {
        return $this->price_self;
    }

    public function setPriceSelf(float $price_self): self
    {
        $this->price_self = $price_self;

        return $this;
    }

    public function getCustomText(): ?string
    {
        return $this->custom_text;
    }

    public function setCustomText(?string $custom_text): self
    {
        $this->custom_text = $custom_text;

        return $this;
    }
}
