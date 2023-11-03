<?php

namespace App\Controllers;

use App\Api;
use App\Response;

class EpisodeController
{
    private Api $api;

    public function __construct()
    {
        $this->api = new Api();
    }

    public function index(): Response
    {
        return new Response(
            'episode/index',
            [
                'episodes' => $this->api->fetchEpisodes(),
            ]
        );
    }

    public function show(int $id): Response
    {
        return new Response(
            'episode/show',
            [
                'episode' => $this->api->fetchEpisode($id),
            ]
        );
    }
}