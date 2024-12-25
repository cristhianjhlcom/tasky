<?php

use App\Livewire\Tasks\Index as TaskIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', TaskIndex::class);
