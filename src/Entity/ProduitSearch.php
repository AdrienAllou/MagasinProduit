<?php
namespace App\Entity;

class ProduitSearch {

    /**
     * @var int|null
     */
    private $minPrice;

    /**
     * @var int|null
     */
    private $maxPrice;

    /**
     * @param null $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return int|null
     */
    public function getMinPrice(): ?int
    {
        return $this->minPrice;
    }

    /**
     * @param int|null $minPrice
     */
    public function setMinPrice(int $minPrice): void
    {
        $this->minPrice = $minPrice;
    }

    /**
     * @return int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param int|null $maxPrice
     */
    public function setMaxPrice(int $maxPrice): void
    {
        $this->maxPrice = $maxPrice;
    }

    /**
     * @var null
     */
    private $type;

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }





}