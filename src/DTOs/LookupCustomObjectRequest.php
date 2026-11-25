<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

final class LookupCustomObjectRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'input',
    ];

    protected const array VALIDATION = [
        'batchSize' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Maximum number of records to return in the response. Max and default is 300
     * Format: int32
     */
    public int $batchSize {
        set {
            $this->assigning('batchSize', $value);
            $this->batchSize = $value;
        }
    }
    /**
     * List of fields to return. If not specified, will return the following fields: marketoGuid, dedupeFields, updatedAt, createdAt, filterType
     */
    public \MarketoSDK\Collections\StringCollection $fields;
    /**
     * Field to search on. Valid values are: dedupeFields, idFields, and any field defined in searchableFields attribute of Describe endpoint. Default is dedupeFields
     */
    public string $filterType;
    /**
     * Search values when using a compound key. Each element must include each of the fields in the compound key. Compound keys are determined by the contents of "dedupeFields" in the Describe result for the object
     */
    public \MarketoSDK\Collections\Delete\CustomObject\Request\InputCollection $input;
    /**
     * Paging token returned from a previous response
     */
    public string $nextPageToken;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'batchSize' => is_int($value) ? $this->batchSize = $value : parent::assignMember($name, $value),
            'fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->fields = new \MarketoSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'filterType' => is_string($value) ? $this->filterType = $value : parent::assignMember($name, $value),
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\Delete\CustomObject\Request\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\CustomObject::class)) : parent::assignMember($name, $value),
            'nextPageToken' => is_string($value) ? $this->nextPageToken = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
