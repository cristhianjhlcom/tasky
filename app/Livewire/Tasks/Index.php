<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        $tasks = Task::query()->latest()->get();

        return view('livewire.tasks.index', [
            'tasks' => $tasks,
        ]);
    }
}
