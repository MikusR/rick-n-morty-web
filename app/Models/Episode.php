<?php

namespace App\Models;


class Episode
{
    private int $id;
    private string $name;
    private string $airDate;
    private string $episode;

    public function __construct(
        int $id,
        string $name,
        string $airDate,
        string $episode
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->airDate = $airDate;
        $this->episode = $episode;
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getAirDate(): string
    {
        return $this->airDate;
    }

    public function getEpisode(): string
    {
        return $this->episode;
    }

}