<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\StaticList\ById;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/staticList/{id}/delete.json [operationId: deleteStaticListByIdUsingPOST] */
    /**
     * Delete Static List
     *
     * Deletes the designated Static List. Required Permissions: Read-Write Asset
     */
    public static function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\StaticList\ById\DeleteJson::class)->post($id);
    }

}
