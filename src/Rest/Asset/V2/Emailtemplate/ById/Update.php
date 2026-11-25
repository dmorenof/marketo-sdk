<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate\ById;

final class Update extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate/{id}/update [operationId: updateContentUsingPOST_emailtemplate] */
    /**
     * Update Email Template
     *
     * Updates an existing email template. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email Template.
     */
    public static function post(string $id, \MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\ById\Update $params): \MarketoSDK\DTOs\Email\TemplateNew\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\ById\Update::class)->post($id, $params);
    }

}
