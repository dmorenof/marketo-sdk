<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * Company record. May include any additional 'fields' listed in the Describe Companies endpoint
 */
final class Company extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique name of the company record
     */
    public string $company;
    /**
     * Unique id of the company record
     */
    public string $externalCompanyId;
    /**
     * Unique integer id of the company record
     */
    public int $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'company' => is_string($value) ? $this->company = $value : parent::assignMember($name, $value),
            'externalCompanyId' => is_string($value) ? $this->externalCompanyId = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
