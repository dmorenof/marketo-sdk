<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/content/{moduleId}/delete.json [operationId: deleteModuleUsingPOST] */
    /**
     * Delete Module
     *
     * Deletes the given module from the email. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\DeleteJson $identifier): \MarketoSDK\DTOs\ResponseOf\EmailModule\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\ByModuleId\DeleteJson::class)->post($identifier);
    }
}
