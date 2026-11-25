<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Sync\SalesPerson;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'input',
];

    /**
     * Type of sync operation to perform
     */
    public \MarketoSDK\Enums\Sync\SalesPerson\Request\ActionEnum $action;
    /**
     * Field to deduplicate on. If the value in the field for a given record is not unique, an error will be returned for the individual record.
     */
    public string $dedupeBy;
    /**
     * List of input records
     */
    public \MarketoSDK\Collections\Delete\SalesPerson\Request\InputCollection $input;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \MarketoSDK\Enums\Sync\SalesPerson\Request\ActionEnum::from($value) : parent::assignMember($name, $value),
            'dedupeBy' => is_string($value) ? $this->dedupeBy = $value : parent::assignMember($name, $value),
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\Delete\SalesPerson\Request\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\SalesPerson::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
