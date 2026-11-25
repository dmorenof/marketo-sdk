<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Leads;

final class ExportJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/leads/export.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ExportResponseWithToken',
        'querySerialization' => [
            'status' => 'multi',
        ],
    ];

    /**
     * Get Export Lead Jobs
     *
     * Returns a list of export jobs that were created in the past 7 days. Required Permissions: Read-Only Lead
     */
    public function get(?\MarketoSDK\GetParams\Bulk\V1\Leads\ExportJson $params = null): \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ExportResponseWithToken $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
