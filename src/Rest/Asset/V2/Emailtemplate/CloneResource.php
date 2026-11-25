<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Emailtemplate;

final class CloneResource extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate/clone [operationId: cloneContentUsingPOST_emailtemplate] */
    /**
     * Clone Email Template
     *
     * Clones an existing email template. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email Template.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate\CloneResource $params): \MarketoSDK\DTOs\Email\TemplateNew\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate\CloneResource::class)->post($params);
    }
}
