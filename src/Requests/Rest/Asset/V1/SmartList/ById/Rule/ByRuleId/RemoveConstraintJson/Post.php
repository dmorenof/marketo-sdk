<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\Rule\ByRuleId\RemoveConstraintJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'attributeId',
];

    /**
     * JSON representation of the constraint to remove, with members 'id' and 'type' which may be 'activity' or 'attribute', for example {"id":2,"type":"activity"}. 'id' is the id of a constraint of the rule type and 'type' is the type of the rule type, both returned by Get Smart List Rules
     */
    public string $attributeId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attributeId' => is_string($value) ? $this->attributeId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
