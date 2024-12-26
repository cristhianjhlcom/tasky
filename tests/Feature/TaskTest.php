<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('tasks', function () {
    it('should show heading messages', function () {
        $this->get(route('tasks.index'))
            ->assertSee('Tasks')
            ->assertSee('List of all your tasks');
    });

    it('should response status code 200 on / visit', function () {
        $this->get(route('tasks.index'))
            ->assertStatus(200);
    });
});
