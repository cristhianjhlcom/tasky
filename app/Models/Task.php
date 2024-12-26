<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Tasks\Enums\Status;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'title',
        'status',
        'description',
        'completed_at',
    ];

    protected $casts = [
        'status' => Status::class,
        'completed_at' => 'datetime',
    ];

    public $timestamps = [
        'completed_at' => 'datetime',
    ];

    public function createdAt(): string
    {
        return $this->created_at->format('d-m-Y');
    }
}
