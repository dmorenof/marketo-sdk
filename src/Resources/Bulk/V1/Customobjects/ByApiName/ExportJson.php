<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName;

final class ExportJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/customobjects/{apiName}/export.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ExportResponseWithToken',
        'querySerialization' => [
            'status' => 'multi',
        ],
    ];

    /**
     * Get Export Custom Object Jobs
     *
     * Returns a list of export jobs that were created in the past 7 days. Required Permissions: Read-Only Custom Object
     */
    public function get(string $apiName, ?\MarketoSDK\GetParams\Bulk\V1\Customobjects\ByApiName\ExportJson $params = null): \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['apiName' => $apiName], parameters: $params);
        return $result;
    }
}
