<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2;

final class Fragment extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment [operationId: createContentUsingPOST_fragment] */
    /**
     * Create Fragment
     *
     * Creates a new fragment. Required Permissions: Read-Write Assets, Access Design Studio, Edit Snippet.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment::class)->post($params);
    }

    /** GET /rest/asset/v2/fragment/{id} [operationId: getContentUsingGET_fragment] */
    /**
     * Get Fragment by Id
     *
     * Retrieves a fragment by its ID. Required Permissions: Read-Only Assets, Access Design Studio, Access Snippet.
     */
    public static function getById(string $id, \MarketoSDK\GetParams\Rest\Asset\V2\Fragment\ById $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment::class)->getById($id, $params);
    }
}
