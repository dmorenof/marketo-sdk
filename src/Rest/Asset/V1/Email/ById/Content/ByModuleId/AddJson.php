<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class AddJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/content/{moduleId}/add.json [operationId: addModuleUsingPOST] */
    /**
     * Add Email Module
     *
     * Adds a new module to an email, with the given id. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\AddJson $identifier, \MarketoSDK\PostParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\AddJson $params): \MarketoSDK\DTOs\ResponseOf\EmailModule\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\ByModuleId\AddJson::class)->post($identifier, $params);
    }

}
