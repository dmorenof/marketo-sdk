<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate\ById;

final class Delete extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate/{id}/delete [operationId: deleteContentUsingPOST_emailtemplate] */
    /**
     * Delete Email Template
     *
     * Deletes an email template by its ID. Required Permissions: Read-Write Assets, Access Design Studio, Delete Email Template.
     */
    public static function post(string $id, \MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\ById\Delete $params): \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\ById\Delete::class)->post($id, $params);
    }
}
