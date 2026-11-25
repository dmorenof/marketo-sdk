<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export\ByExportId;

final class CancelJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/customobjects/{apiName}/export/{exportId}/cancel.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Export\\Response',
    ];

    /**
     * Cancel Export Custom Object Job
     *
     * Cancel export job. Required Permissions: Read-Only Custom Object
     */
    public function post(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Export\ByExportId\CancelJson $identifier): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Export\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier);
        return $result;
    }
}
