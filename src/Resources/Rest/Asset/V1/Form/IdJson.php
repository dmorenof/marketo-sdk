<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/form/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpForm\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Form By Id
     *
     * Retrieves a form record by its id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Form\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpForm\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpForm\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\FormMetaData\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Form Metadata
     *
     * Updates the metadata of the target form. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\FormMetaData\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpForm\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
