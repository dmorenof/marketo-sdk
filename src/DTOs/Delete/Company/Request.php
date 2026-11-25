<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Delete\Company;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Field to delete company records by. Key may be "dedupeFields" or "idField"
     */
    public string $deleteBy;
    /**
     * List of company objects. Companies in the list should only contain a member matching the dedupeBy value. Each 'Company' object contains a 'searchableField' for lookup purposes which can be retrieved using the Describe Companies endpoint
     */
    public \MarketoSDK\Collections\Delete\Company\Request\InputCollection $input;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deleteBy' => is_string($value) ? $this->deleteBy = $value : parent::assignMember($name, $value),
            'input' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->input = new \MarketoSDK\Collections\Delete\Company\Request\InputCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\Company::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
