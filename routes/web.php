<?php

use App\Livewire\Editor;
use Illuminate\Support\Facades\Route;

Route::get('/', Editor::class)->name('editor');
