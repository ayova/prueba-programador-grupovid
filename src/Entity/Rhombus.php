<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RhombusRepository")
 */
class Rhombus
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
    private $rhombus_color;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rhombus_color_value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRhombusColor(): ?string
    {
        return $this->rhombus_color;
    }

    public function setRhombusColor(string $rhombus_color): self
    {
        $this->rhombus_color = $rhombus_color;

        return $this;
    }

    public function getRhombusColorValue(): ?string
    {
        return $this->rhombus_color_value;
    }

    public function setRhombusColorValue(string $rhombus_color_value): self
    {
        $this->rhombus_color_value = $rhombus_color_value;

        return $this;
    }
}
