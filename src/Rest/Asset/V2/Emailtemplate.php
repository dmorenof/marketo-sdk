<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2;

final class Emailtemplate extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/emailtemplate [operationId: createContentUsingPOST_emailtemplate] */
    /**
     * Create Email Template
     *
     * Creates a new email template. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email Template.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Emailtemplate $params): \MarketoSDK\DTOs\Email\TemplateNew\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate::class)->post($params);
    }

    /** GET /rest/asset/v2/emailtemplate/{id} [operationId: getContentUsingGET_emailtemplate] */
    /**
     * Get Email Template by Id
     *
     * Retrieves an email template by its ID. Required Permissions: Read-Only Assets, Access Design Studio, Access Email Template.
     */
    public static function getById(string $id, \MarketoSDK\GetParams\Rest\Asset\V2\Emailtemplate\ById $params): \MarketoSDK\DTOs\Email\TemplateNew\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Emailtemplate::class)->getById($id, $params);
    }

}
