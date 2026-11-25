<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\Folder\ById\DeleteJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * type
     */
    public \MarketoSDK\Enums\Rest\Asset\V1\Folder\ById\DeleteJson\Post\DeleteJsonTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \MarketoSDK\Enums\Rest\Asset\V1\Folder\ById\DeleteJson\Post\DeleteJsonTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
