<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs;

/**
 * ContentMetadataDTO
 *
 * Audit information for the asset.
 */
final class ContentMetadataDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $createdAt;
    public string $createdBy;
    public string $createdByAepId;
    public string $createdById;
    public string $modifiedAt;
    public string $modifiedBy;
    public string $modifiedByAepId;
    public string $modifiedById;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'createdBy' => is_string($value) ? $this->createdBy = $value : parent::assignMember($name, $value),
            'createdByAepId' => is_string($value) ? $this->createdByAepId = $value : parent::assignMember($name, $value),
            'createdById' => is_string($value) ? $this->createdById = $value : parent::assignMember($name, $value),
            'modifiedAt' => is_string($value) ? $this->modifiedAt = $value : parent::assignMember($name, $value),
            'modifiedBy' => is_string($value) ? $this->modifiedBy = $value : parent::assignMember($name, $value),
            'modifiedByAepId' => is_string($value) ? $this->modifiedByAepId = $value : parent::assignMember($name, $value),
            'modifiedById' => is_string($value) ? $this->modifiedById = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
