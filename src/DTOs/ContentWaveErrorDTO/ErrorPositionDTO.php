<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\ContentWaveErrorDTO;

/**
 * Location in the content the entry refers to (for script/validation errors).
 */
final class ErrorPositionDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'column' => [
        'format' => 'int32',
    ],
    'line' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $column {
        set {
            $this->assigning('column', $value);
            $this->column = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $line {
        set {
            $this->assigning('line', $value);
            $this->line = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'column' => is_int($value) ? $this->column = $value : parent::assignMember($name, $value),
            'line' => is_int($value) ? $this->line = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
