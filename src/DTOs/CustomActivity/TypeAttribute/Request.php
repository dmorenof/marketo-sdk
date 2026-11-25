<?php

declare(strict_types=1);

namespace MarketoSDK\DTOs\CustomActivity\TypeAttribute;

final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of attributes to add to the activity type
     */
    public \MarketoSDK\Collections\CustomActivity\Type\AttributesCollection $attributes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attributes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attributes = new \MarketoSDK\Collections\CustomActivity\Type\AttributesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \MarketoSDK\DTOs\CustomActivity\TypeAttribute::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
