<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\Email;

final class DynamicContentItem extends \Dmorenof\SdkRuntime\DTO
{
    public string $content;
    public string $id;
    public string $segmentId;
    public string $segmentName;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'segmentId' => is_string($value) ? $this->segmentId = $value : parent::assignMember($name, $value),
            'segmentName' => is_string($value) ? $this->segmentName = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
