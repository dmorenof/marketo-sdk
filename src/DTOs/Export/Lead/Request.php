<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Export\Lead;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fields',
    'filter',
];

    /**
     * File header field names override (corresponds with REST API name)
     */
    public \MarketoSDK\DTOs\ColumnHeaderNames $columnHeaderNames;
    /**
     * Comma-separated list of fields to include in the file
     */
    public \MarketoSDK\Collections\StringCollection $fields;
    /**
     * Lead record selection criteria. Can be one of the following: "createdAt", "updatedAt", "staticListName", "staticListId", "smartListName", "smartListId"
     */
    public \MarketoSDK\DTOs\Export\LeadFilter $filter;
    /**
     * File format to create("CSV", "TSV", "SSV"). Default is "CSV"
     */
    public string $format;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'columnHeaderNames' => $value instanceof \stdClass ? $this->columnHeaderNames = new \MarketoSDK\DTOs\ColumnHeaderNames($value) : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->fields = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'filter' => $value instanceof \stdClass ? $this->filter = new \MarketoSDK\DTOs\Export\LeadFilter($value) : parent::assignMember($name, $value),
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
