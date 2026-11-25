<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPage;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/landingPage/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPage\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Landing Page by Id
     *
     * Returns the landing record for the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\LandingPage\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPage\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPage/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LandingPage\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\LandingPage\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Landing Page Metadata
     *
     * Updates the metadata for the targe landing page. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Update\LandingPage\Request $payload): \MarketoSDK\DTOs\ResponseOf\LandingPage\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LandingPage\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
