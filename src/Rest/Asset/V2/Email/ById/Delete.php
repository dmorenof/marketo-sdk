<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Email\ById;

final class Delete extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/email/{id}/delete [operationId: deleteContentUsingPOST_email] */
    /**
     * Delete Email
     *
     * Deletes an email asset by its ID. Required Permissions: Read-Write Assets, Access Design Studio, Delete Email.
     */
    public static function post(string $id, \MarketoSDK\PostParams\Rest\Asset\V2\Email\ById\Delete $params): \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email\ById\Delete::class)->post($id, $params);
    }

}
