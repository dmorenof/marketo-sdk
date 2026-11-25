<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment\ById;

final class Delete extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment/{id}/delete [operationId: deleteContentUsingPOST_fragment] */
    /**
     * Delete Fragment
     *
     * Deletes a fragment by its ID. Required Permissions: Read-Write Assets, Access Design Studio, Delete Snippet.
     */
    public static function post(string $id, \MarketoSDK\PostParams\Rest\Asset\V2\Fragment\ById\Delete $params): \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\ById\Delete::class)->post($id, $params);
    }

}
