<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\SmartList\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/smartList/{id}/delete.json [operationId: deleteSmartListByIdUsingPOST] */
    /**
     * Delete Smart List
     *
     * Deletes the designated Smart List. Required Permissions: Read-Write Asset
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById\DeleteJson::class)->post($id);
    }
}
