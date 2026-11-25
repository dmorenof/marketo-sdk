<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Activities;

final class ExternalJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/activities/external.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomActivity',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CustomActivity\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Custom Activities
     *
     * Allows insertion of custom activities associated to given lead records. Requires provisioning of custom activity types to utilize. Required Permissions: Read-Write Activity
     */
    public function post(\MarketoSDK\DTOs\CustomActivity\Request $payload): \MarketoSDK\DTOs\ResponseOf\CustomActivity
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomActivity $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
