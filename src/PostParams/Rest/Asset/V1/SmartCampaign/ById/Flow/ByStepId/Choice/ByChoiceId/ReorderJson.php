<?php

declare(strict_types=1);

namespace MarketoSDK\PostParams\Rest\Asset\V1\SmartCampaign\ById\Flow\ByStepId\Choice\ByChoiceId;

final class ReorderJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'newSeqNumZeroBased',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'newSeqNumZeroBased' => 'newSeqNumZeroBased',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'newSeqNumZeroBased' => [
            'format' => 'int32',
        ],
    ];

    public int $newSeqNumZeroBased {
        set {
            $this->assigning('newSeqNumZeroBased', $value);
            $this->newSeqNumZeroBased = $value;
        }
    }
}
