<?php

namespace App\Controllers;

class CharacterController
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
}