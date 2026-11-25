<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Email;

final class CloneResource extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/email/clone [operationId: cloneContentUsingPOST_email] */
    /**
     * Clone Email
     *
     * Clones an existing email asset. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Email\CloneResource $params): \MarketoSDK\DTOs\EmailNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email\CloneResource::class)->post($params);
    }

}
