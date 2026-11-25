<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\File\ById;

final class ContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/file/{id}/content.json [operationId: updateContentUsingPOST] */
    /**
     * Update File Content
     *
     * Replaces the current content of the file with the included payload. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\FileContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\File\ById\ContentJson::class)->post($id, $payload);
    }
}
