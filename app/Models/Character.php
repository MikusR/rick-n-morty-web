<?php

namespace App\Models;

class Character
{
    private int $id;
    private string $status;
    private string $species;
    private string $type;
    private string $gender;
    private string $image;

    public function __construct(
        int $id,
        string $status,
        string $species,
        string $type,
        string $gender,
        string $image
    ) {
        $this->id = $id;
        $this->status = $status;
        $this->species = $species;
        $this->type = $type;
        $this->gender = $gender;
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getSpecies(): string
    {
        return $this->species;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
}