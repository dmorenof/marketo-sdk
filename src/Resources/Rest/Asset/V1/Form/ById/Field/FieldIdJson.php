<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById\Field;

final class FieldIdJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/field/{fieldId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpFormField\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\FormField\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Form Field
     *
     * Updates the configuration for that target field. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\Form\ById\Field\FieldIdJson $identifier, \MarketoSDK\DTOs\Update\FormField\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpFormField\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }
}
