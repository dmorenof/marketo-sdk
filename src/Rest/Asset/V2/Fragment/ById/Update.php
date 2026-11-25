<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment\ById;

final class Update extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment/{id}/update [operationId: updateContentUsingPOST_fragment] */
    /**
     * Update Fragment
     *
     * Updates an existing fragment. Required Permissions: Read-Write Assets, Access Design Studio, Edit Snippet.
     */
    public static function post(string $id, \MarketoSDK\PostParams\Rest\Asset\V2\Fragment\ById\Update $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\ById\Update::class)->post($id, $params);
    }
}
