<?php
use App\Job\Controllers\JobController;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->post('/jobs', [JobController::class, 'postJob']);
$app->get('/jobs', [JobController::class, 'getJobs']);

$app->run();