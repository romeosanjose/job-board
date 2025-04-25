<?php

require __DIR__ . '/../vendor/autoload.php';

use DI\Container;
use App\Job\Repositories\Contracts\JobRepositoryInterface;
use App\Job\Repositories\JobRepository;

$container = new Container();
$container->set(JobRepositoryInterface::class, JobRepository::class);

AppFactory::setContainer($container);

require __DIR__ . '/../routes/api.php';