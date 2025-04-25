<?php

namespace App\Services;

use GuzzleHttp\Client;

class ExternalJobService
{
    protected $client;
    protected $externalUrl = 'https://mrge-group-gmbh.jobs.personio.de/xml';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function fetchExternalJobs()
    {
        $response = $this->client->get($this->externalUrl);
        $xmlContent = $response->getBody()->getContents();

        return $this->parseXml($xmlContent);
    }

    protected function parseXml($xmlContent)
    {
        $jobs = [];
        $xml = simplexml_load_string($xmlContent);

        foreach ($xml->job as $job) {
            $jobs[] = [
                'title' => (string) $job->title,
                'description' => (string) $job->description,
                'link' => (string) $job->link
            ];
        }

        return $jobs;
    }
}