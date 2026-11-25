<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Activities;

final class ExportJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/activities/export.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ExportResponseWithToken',
        'querySerialization' => [
            'status' => 'multi',
        ],
    ];

    /**
     * Get Export Activity Jobs
     *
     * Returns a list of export jobs that were created in the past 7 days. Required Permissions: Read-Only Activity
     */
    public function get(?\MarketoSDK\GetParams\Bulk\V1\Activities\ExportJson $params = null): \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
