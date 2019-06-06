<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class SentenceController extends Controller
{
    protected $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function sendSentence(Request $request) {
        $result = $this->client->post('http://127.0.0.1:8001/api/commands/getResponse', [
            'form_params' => [
                'sentence'  => $request->sentence,
                'step'      => $request->step
            ]
        ]);

        return $result->getBody();
    }
}
