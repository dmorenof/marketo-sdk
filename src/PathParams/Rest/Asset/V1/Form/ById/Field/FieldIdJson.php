<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\Form\ById\Field;

final class FieldIdJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fieldId',
        'id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'fieldId' => 'fieldId',
            'id' => 'id',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'id' => [
            'format' => 'int32',
        ],
    ];

    public string $fieldId;
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
}
