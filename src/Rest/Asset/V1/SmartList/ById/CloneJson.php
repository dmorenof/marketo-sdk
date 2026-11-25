<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById;

final class CloneJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/clone.json [operationId: cloneSmartListUsingPOST] */
    /**
     * Clone Smart List
     *
     * Clones the designated Smart List. Required Permissions: Read-Write Asset
     */
    public static function post(int $id, \MarketoSDK\DTOs\CloneSmartListRequest $payload): \MarketoSDK\DTOs\ResponseOf\SmartList\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\CloneJson::class)->post($id, $payload);
    }
}
