<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class RenameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/content/{moduleId}/rename.json [operationId: renameUsingPOST] */
    /**
     * Rename Email Module
     *
     * Renames a module. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\RenameJson $identifier, \MarketoSDK\PostParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\RenameJson $params): \MarketoSDK\DTOs\ResponseOf\EmailModule\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\ByModuleId\RenameJson::class)->post($identifier, $params);
    }
}
