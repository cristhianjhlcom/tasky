<?php

declare(strict_types=1);

namespace Modules\Tasks\Enums;

enum Status: string
{
    case InProgress = 'in_progress';
    case Cancelled = 'cancelled';
    case Completed = 'completed';

    public function label(): string
    {
        return match ($this) {
            self::InProgress => 'En Progreso',
            self::Cancelled => 'Cancelado',
            self::Completed => 'Completado',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::InProgress => 'icon.arrow-path',
            self::Cancelled => 'icon.x-circle',
            self::Completed => 'icon.check-circle',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::InProgress => 'grey',
            self::Cancelled => 'red',
            self::Completed => 'green',
        };
    }
}
