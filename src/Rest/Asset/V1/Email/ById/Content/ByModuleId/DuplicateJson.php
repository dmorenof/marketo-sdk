<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class DuplicateJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/content/{moduleId}/duplicate.json [operationId: duplicateModuleUsingPOST] */
    /**
     * Duplicate Email Module
     *
     * Creates a copy of the designated module in an email. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\DuplicateJson $identifier, \MarketoSDK\PostParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\DuplicateJson $params): \MarketoSDK\DTOs\ResponseOf\EmailModule\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\ByModuleId\DuplicateJson::class)->post($identifier, $params);
    }
}
