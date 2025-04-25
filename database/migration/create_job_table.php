<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('jobs', function ($table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->string('email')->unique();
    $table->boolean('is_first_post')->default(false);
    $table->timestamps();
});