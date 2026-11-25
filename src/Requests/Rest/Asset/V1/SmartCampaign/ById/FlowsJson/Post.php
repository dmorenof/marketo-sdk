<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\SmartCampaign\ById\FlowsJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'activityType',
        'index',
    ];

    protected const array VALIDATION = [
        'index' => [
            'format' => 'int32',
        ],
    ];

    /**
     * JSON representation of the flow step type, with members 'id' and 'type', for example {"id":6,"type":"activity"}. Flow step types are returned by Get Smart Campaign Flow Steps
     */
    public string $activityType;
    /**
     * 0-based position to insert the step
     * Format: int32
     */
    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'activityType' => is_string($value) ? $this->activityType = $value : parent::assignMember($name, $value),
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
