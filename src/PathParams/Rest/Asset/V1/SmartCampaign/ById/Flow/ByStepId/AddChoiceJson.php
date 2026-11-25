<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId;

final class AddChoiceJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'stepId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'id' => 'id',
        'stepId' => 'stepId',
    ],
    'query' => [],
    'header' => [],
];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
    'stepId' => [
        'format' => 'int32',
    ],
];

    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public int $stepId {
        set {
            $this->assigning('stepId', $value);
            $this->stepId = $value;
        }
    }
}
