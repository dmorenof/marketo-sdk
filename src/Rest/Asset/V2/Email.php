<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2;

final class Email extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v2/email [operationId: createContentUsingPOST_email] */
    /**
     * Create Email
     *
     * Creates a new email asset. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email.
     */
    public static function post(\MarketoSDK\PostParams\Rest\Asset\V2\Email $params): \MarketoSDK\DTOs\EmailNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email::class)->post($params);
    }

    /** GET /rest/asset/v2/email/{id} [operationId: getContentUsingGET_email] */
    /**
     * Get Email by Id
     *
     * Retrieves an email asset by its ID. Required Permissions: Read-Only Assets, Access Design Studio, Access Email.
     */
    public static function getById(string $id, \MarketoSDK\GetParams\Rest\Asset\V2\Email\ById $params): \MarketoSDK\DTOs\EmailNewResponse|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email::class)->getById($id, $params);
    }
}
