<?php

namespace App\Job\Controllers;

use App\Job\Services\JobService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class JobController
{
    protected $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function postJob(Request $request, Response $response)
    {
        $data = $request->getParsedBody();

        $job = $this->jobService->postJob($data);

        $response->getBody()->write(json_encode($job));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function getJobs(Request $request, Response $response)
    {
        $jobs = $this->jobService->getAllJobs();

        $response->getBody()->write(json_encode($jobs));
        return $response->withHeader('Content-Type', 'application/json');
    }
}