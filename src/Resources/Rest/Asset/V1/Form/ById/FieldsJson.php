<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class FieldsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/form/{id}/fields.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpFormField\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Fields for Form
     *
     * Retrieves the list of fields in the target form. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Form\ById\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpFormField\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/fields.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpFormField\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Add\\FormField\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Field to Form
     *
     * Adds a field to a form. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Add\FormField\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpFormField\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
