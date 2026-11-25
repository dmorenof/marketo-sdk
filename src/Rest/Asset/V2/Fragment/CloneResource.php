<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Fragment;

final class CloneResource extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/fragment/clone [operationId: cloneContentUsingPOST_fragment] */
    /**
     * Clone Fragment
     *
     * Clones an existing fragment. Required Permissions: Read-Write Assets, Access Design Studio, Edit Snippet.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Fragment\CloneResource $params): \MarketoSDK\DTOs\FragmentNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Fragment\CloneResource::class)->post($params);
    }
}
