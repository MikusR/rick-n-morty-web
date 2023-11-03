<?php

namespace App;

use App\Models\Episode;
use App\Models\EpisodeCollection;
use GuzzleHttp\Client;

class Api
{
    private Client $client;
    private const EPISODE_URL = 'https://rickandmortyapi.com/api/episode';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function fetchEpisodes(): EpisodeCollection
    {
        $episodes = new EpisodeCollection();

        $page = 1;

        while (true) {
            $response = $this->client->get(self::EPISODE_URL . "?page=$page");

            $data = json_decode((string)$response->getBody());

            foreach ($data->results as $result) {
                $episodes->add(
                    new Episode(
                        $result->id,
                        $result->name,
                        $result->air_date,
                        $result->episode
                    )
                );
            }

            $page++;

            if ($data->info->next == null) {
                break;
            }
        }

        return $episodes;
    }
}