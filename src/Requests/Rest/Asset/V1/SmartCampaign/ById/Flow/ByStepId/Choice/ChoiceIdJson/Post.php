<?php

declare(strict_types=1);

namespace MarketoSDK\Requests\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ChoiceIdJson;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * JSON object mapping attribute ids to values, for example {"101":"1 day"}. Each key is the activityTypeAttribId of a flow step choice attribute
     */
    public string $attributes;
    /**
     * JSON representation of the attribute tested by the choice condition, with members 'id' and 'type' which may be 'activity' or 'attribute', for example {"id":64,"type":"attribute"}. Applies to non-default choices
     */
    public string $conditionTypeId;
    /**
     * Comma-separated list of condition values, for example San Francisco,Portland
     */
    public string $conditionValues;
    /**
     * Condition operator, for example 'is', 'is not', 'contains'
     */
    public string $operator;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attributes' => is_string($value) ? $this->attributes = $value : parent::assignMember($name, $value),
            'conditionTypeId' => is_string($value) ? $this->conditionTypeId = $value : parent::assignMember($name, $value),
            'conditionValues' => is_string($value) ? $this->conditionValues = $value : parent::assignMember($name, $value),
            'operator' => is_string($value) ? $this->operator = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
