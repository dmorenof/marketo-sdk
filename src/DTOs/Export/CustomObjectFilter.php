<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Export;

final class CustomObjectFilter extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'smartListId' => [
        'format' => 'int32',
    ],
    'staticListId' => [
        'format' => 'int32',
    ],
];

    /**
     * Id of smart list to retrieve leads from
     * Format: int32
     */
    public int $smartListId {
        set {
            $this->assigning('smartListId', $value);
            $this->smartListId = $value;
        }
    }
    /**
     * Name of smart list to retrieve leads from
     */
    public string $smartListName;
    /**
     * Id of static list to retrieve leads from
     * Format: int32
     */
    public int $staticListId {
        set {
            $this->assigning('staticListId', $value);
            $this->staticListId = $value;
        }
    }
    /**
     * Name of static list to retrieve leads from
     */
    public string $staticListName;
    /**
     * Date range to filter updated custom objects on
     */
    public \MarketoSDK\DTOs\DateRange $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'smartListId' => is_int($value) ? $this->smartListId = $value : parent::assignMember($name, $value),
            'smartListName' => is_string($value) ? $this->smartListName = $value : parent::assignMember($name, $value),
            'staticListId' => is_int($value) ? $this->staticListId = $value : parent::assignMember($name, $value),
            'staticListName' => is_string($value) ? $this->staticListName = $value : parent::assignMember($name, $value),
            'updatedAt' => $value instanceof \stdClass ? $this->updatedAt = new \MarketoSDK\DTOs\DateRange($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
