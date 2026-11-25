<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class SubmitButtonJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/submitButton.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpForm\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\SubmitButtonRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Submit Button
     *
     * Updates the submit button configuration for the target form. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\SubmitButtonRequest $payload): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpForm\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
