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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $badge_cloud;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $badge_cloud_color;

    /**
     * @ORM\Column(type="array")
     */
    private $features = [];

    /**
     * @ORM\Column(type="array")
     */
    private $features_cloud = [];

    /**
     * @ORM\Column(type="float")
     */
    private $price_cloud;

    /**
     * @ORM\Column(type="float")
     */
    private $price_self;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cloud_only;

    /**
     * @ORM\Column(type="boolean")
     */
    private $self_only;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $period;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $period_cloud;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $discount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $discount_cloud;

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

    public function getFeaturesCloud(): ?array
    {
        return $this->features_cloud;
    }

    public function setFeaturesCloud(array $features_cloud): self
    {
        $this->features_cloud = $features_cloud;

        return $this;
    }

    public function getBadgeCloud(): ?string
    {
        return $this->badge_cloud;
    }

    public function setBadgeCloud(?string $badge_cloud): self
    {
        $this->badge_cloud = $badge_cloud;

        return $this;
    }

    public function getBadgeCloudColor(): ?string
    {
        return $this->badge_cloud_color;
    }

    public function setBadgeCloudColor(?string $badge_cloud_color): self
    {
        $this->badge_cloud_color = $badge_cloud_color;

        return $this;
    }

    public function getCloudOnly(): ?bool
    {
        return $this->cloud_only;
    }

    public function setCloudOnly(bool $cloud_only): self
    {
        $this->cloud_only = $cloud_only;

        return $this;
    }

    public function getSelfOnly(): ?bool
    {
        return $this->self_only;
    }

    public function setSelfOnly(bool $self_only): self
    {
        $this->self_only = $self_only;

        return $this;
    }

    public function getPeriod(): ?string
    {
        return $this->period;
    }

    public function setPeriod(?string $period): self
    {
        $this->period = $period;

        return $this;
    }

    public function getPeriodCloud(): ?string
    {
        return $this->period_cloud;
    }

    public function setPeriodCloud(?string $period_cloud): self
    {
        $this->period_cloud = $period_cloud;

        return $this;
    }

    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getDiscountCloud(): ?float
    {
        return $this->discount_cloud;
    }

    public function setDiscountCloud(?float $discount_cloud): self
    {
        $this->discount_cloud = $discount_cloud;

        return $this;
    }
}
