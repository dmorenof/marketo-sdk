<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\ReorderJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'order',
];

    /**
     * JSON array of rules with members 'id' (the rule id) and 'index' (its 1-based position), for example [{"id":101,"index":1}]
     */
    public string $order;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'order' => is_string($value) ? $this->order = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
