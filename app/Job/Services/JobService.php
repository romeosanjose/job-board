<?php

namespace App\Job\Services;

use App\Job\Repositories\Contracts\JobRepositoryInterface;
use App\Services\ExternalJobService;

class JobService
{
    protected $jobRepository;
    protected $externalJobService;

    public function __construct(JobRepositoryInterface $jobRepository, ExternalJobService $externalJobService)
    {
        $this->jobRepository = $jobRepository;
        $this->externalJobService = $externalJobService;
    }

    public function getAllJobs()
    {
        $internalJobs = $this->jobRepository->getAll();
        $externalJobs = $this->externalJobService->fetchExternalJobs();

        return array_merge($internalJobs, $externalJobs);
    }

    public function postJob(array $data)
    {
        $existingJob = $this->jobRepository->findByEmail($data['email']);

        if (!$existingJob) {
            $data['is_first_post'] = true;
            $this->notifyModerator($data);
        } else {
            $data['is_first_post'] = false;
        }

        return $this->jobRepository->create($data);
    }

    protected function notifyModerator(array $jobData)
    {
        $approveLink = "https://example.com/jobs/approve";
        $spamLink = "https://example.com/jobs/spam";

        $message = "New Job Posted:\n";
        $message .= "Title: {$jobData['title']}\n";
        $message .= "Description: {$jobData['description']}\n";
        $message .= "Approve: {$approveLink}\n";
        $message .= "Mark as Spam: {$spamLink}\n";

        //TODO: Simulate sending notification (e.g., email, log, etc.)
        error_log($message);
    }
}