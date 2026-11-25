<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\Form\ById\FieldSet\ByFieldSetId\Field\ByFieldId;

final class DeleteJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fieldId',
        'fieldSetId',
        'id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'fieldId' => 'fieldId',
            'fieldSetId' => 'fieldSetId',
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
    public string $fieldSetId;
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
}
