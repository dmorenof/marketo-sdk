<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Delete\CustomObject;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'input',
    ];

    /**
     * Field to delete records by. Permissible values are idField or dedupeFields as indicated by the result of the corresponding describe record
     */
    public string $deleteBy;
    /**
     * List of input records
     */
    public \MarketoSDK\Collections\Delete\CustomObject\Request\InputCollection $input;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deleteBy' => is_string($value) ? $this->deleteBy = $value : parent::assignMember($name, $value),
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\Delete\CustomObject\Request\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\CustomObject::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
