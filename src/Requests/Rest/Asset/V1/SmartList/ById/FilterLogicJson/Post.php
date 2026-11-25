<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\FilterLogicJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'matchType',
];

    /**
     * Custom logic expression, for example '1 and (2 or 3)'. Required when matchType is custom
     */
    public string $customRuleLogic;
    /**
     * How rules are combined
     */
    public \MarketoSDK\Enums\Rest\Asset\V1\SmartList\ById\FilterLogicJson\Post\MatchTypeEnum $matchType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customRuleLogic' => is_string($value) ? $this->customRuleLogic = $value : parent::assignMember($name, $value),
            'matchType' => is_string($value) ? $this->matchType = \MarketoSDK\Enums\Rest\Asset\V1\SmartList\ById\FilterLogicJson\Post\MatchTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
