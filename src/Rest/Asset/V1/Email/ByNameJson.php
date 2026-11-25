<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/email/byName.json [operationId: getEmailByNameUsingGET] */
    /**
     * Get Email by Name
     *
     * Returns email records based on the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\Email\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ByNameJson::class)->get($params);
    }
}
