<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export\ByExportId;

final class StatusJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/customobjects/{apiName}/export/{exportId}/status.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Export\\Response',
    ];

    /**
     * Get Export Custom Object Job Status
     *
     * Returns status of an export job. Job status is available for 30 days after Completed or Failed status was reached. Required Permissions: Read-Only Custom Object
     */
    public function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\StatusJson $identifier): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Export\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

}
