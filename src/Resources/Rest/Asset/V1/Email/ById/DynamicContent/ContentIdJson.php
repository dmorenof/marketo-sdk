<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById\DynamicContent;

final class ContentIdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/email/{id}/dynamicContent/{contentId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailDynamicContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Email Dynamic Content
     *
     * Retrieves the dynamic content record for the given section. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson $identifier, ?\MarketoSDK\GetParams\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailDynamicContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailDynamicContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/dynamicContent/{contentId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\EmailDynamicContent\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update Email Dynamic Content Section
     *
     * Updates dynamic content in the given section. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson $identifier, \MarketoSDK\DTOs\Update\EmailDynamicContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }
}
