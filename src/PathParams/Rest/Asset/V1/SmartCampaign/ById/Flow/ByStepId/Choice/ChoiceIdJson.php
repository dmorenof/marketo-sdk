<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice;

final class ChoiceIdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'choiceId',
        'id',
        'stepId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'choiceId' => 'choiceId',
            'id' => 'id',
            'stepId' => 'stepId',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'choiceId' => [
            'format' => 'int32',
        ],
        'id' => [
            'format' => 'int32',
        ],
        'stepId' => [
            'format' => 'int32',
        ],
    ];

    public int $choiceId {
        set {
            $this->assigning('choiceId', $value);
            $this->choiceId = $value;
        }
    }
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
