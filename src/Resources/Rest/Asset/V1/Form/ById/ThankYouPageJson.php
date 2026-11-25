<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class ThankYouPageJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/form/{id}/thankYouPage.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ThankYouPage\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Thank You Page by Form Id
     *
     * Returns the thank you page configuration for a given form. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Form\ById\ThankYouPageJson $params = null): \MarketoSDK\DTOs\ResponseOf\ThankYouPage\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ThankYouPage\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/thankYouPage.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ThankYouPage\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\ThankYouPage\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Thank You Page
     *
     * Updates the thank you page configuration for a given form. This update is destructive and the resulting draft will not have any memory of the previous configuration. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\ThankYouPage\Request $payload): \MarketoSDK\DTOs\ResponseOf\ThankYouPage\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ThankYouPage\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
