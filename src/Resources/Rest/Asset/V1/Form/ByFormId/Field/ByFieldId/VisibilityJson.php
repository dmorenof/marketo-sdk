<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ByFormId\Field\ByFieldId;

final class VisibilityJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{formId}/field/{fieldId}/visibility.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\FormVisibilityRule\\Response',
        'validation' => [
            'formId' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Add\\FormFieldVisibility\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Form Field Visibility Rules
     *
     * Adds a visibility rule to the target form field. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\Form\ByFormId\Field\ByFieldId\VisibilityJson $identifier, \MarketoSDK\DTOs\Add\FormFieldVisibility\Request $payload): \MarketoSDK\DTOs\ResponseOf\FormVisibilityRule\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\FormVisibilityRule\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }

}
