<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\SmartList\ById\RulesJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'index',
        'ruleId',
    ];

    protected const array VALIDATION = [
        'index' => [
            'format' => 'int32',
        ],
    ];

    /**
     * 1-based position to insert the rule
     * Format: int32
     */
    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }
    /**
     * Set true to negate the rule. Default false
     */
    public bool $negative;
    /**
     * JSON representation of the rule type, with members 'id' and 'type' which may be 'activity' or 'attribute', for example {"id":11,"type":"activity"}. Rule types are returned by Get Smart List Rules
     */
    public string $ruleId;
    /**
     * Set true for a trigger rule. Default false
     */
    public bool $trigger;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            'negative' => is_bool($value) ? $this->negative = $value : parent::assignMember($name, $value),
            'ruleId' => is_string($value) ? $this->ruleId = $value : parent::assignMember($name, $value),
            'trigger' => is_bool($value) ? $this->trigger = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
