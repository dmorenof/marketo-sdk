<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Email\ById;

final class Update extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/email/{id}/update [operationId: updateContentUsingPOST_email] */
    /**
     * Update Email
     *
     * Updates an existing email asset. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email.
     */
    public static function post(string $id, \MarketoSDK\PostParams\Rest\Asset\V2\Email\ById\Update $params): \MarketoSDK\DTOs\EmailNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email\ById\Update::class)->post($id, $params);
    }
}
