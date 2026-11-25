<?php

declare(strict_types=1);

namespace MarketoSDK\Bulk\V1\Customobjects\ByApiName;

final class ImportJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /bulk/v1/customobjects/{apiName}/import.json [operationId: importCustomObjectUsingPOST] */
    /**
     * Import Custom Objects
     *
     * Imports a file containing data records into the target instance. Required Permissions: Read-Write Custom Object
     */
    public static function post(string $apiName, \MarketoSDK\PostParams\Bulk\V1\Customobjects\ByApiName\ImportJson $params): \MarketoSDK\DTOs\ResponseOf\ImportCustomObject\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\ImportJson::class)->post($apiName, $params);
    }

}
