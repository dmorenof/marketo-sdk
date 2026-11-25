<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * PageDetailsDTO
 */
class PageDetailsDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'currentPage' => [
        'format' => 'int32',
    ],
    'pageSize' => [
        'format' => 'int32',
    ],
    'totalItems' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $currentPage {
        set {
            $this->assigning('currentPage', $value);
            $this->currentPage = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $pageSize {
        set {
            $this->assigning('pageSize', $value);
            $this->pageSize = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $totalItems {
        set {
            $this->assigning('totalItems', $value);
            $this->totalItems = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currentPage' => is_int($value) ? $this->currentPage = $value : parent::assignMember($name, $value),
            'pageSize' => is_int($value) ? $this->pageSize = $value : parent::assignMember($name, $value),
            'totalItems' => is_int($value) ? $this->totalItems = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
