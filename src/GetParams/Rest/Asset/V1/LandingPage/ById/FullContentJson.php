<?php

declare(strict_types=1);

namespace MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\ById;

final class FullContentJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'leadId' => 'leadId',
        'segmentation' => 'segmentation',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'leadId' => [
        'format' => 'int32',
    ],
];

    public ?int $leadId {
        set {
            $this->assigning('leadId', $value);
            $this->leadId = $value;
        }
    }
    public ?string $segmentation;
}
