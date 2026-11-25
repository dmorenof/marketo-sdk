<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\UsedBy;

/**
 * UsedByItemDTO
 */
final class ItemDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \MarketoSDK\DTOs\AppDataDTO $appData;
    public string $channel;
    public string $contentType;
    public string $externalId;
    public string $id;
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appData' => $value instanceof \stdClass ? $this->appData = new \MarketoSDK\DTOs\AppDataDTO($value) : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
