<?php

declare(strict_types=1);

namespace MarketoSDK\PathParams\Rest\Asset\V1\Form\ByFormId\Field\ByFieldId;

final class VisibilityJson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fieldId',
        'formId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'fieldId' => 'fieldId',
            'formId' => 'formId',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'formId' => [
            'format' => 'int32',
        ],
    ];

    public string $fieldId;
    public int $formId {
        set {
            $this->assigning('formId', $value);
            $this->formId = $value;
        }
    }
}
