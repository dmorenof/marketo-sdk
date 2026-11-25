<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Program;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/program/{id}.json [operationId: getProgramByIdUsingGET] */
    /**
     * Get Program by Id
     *
     * Retrieves the program record for the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\IdJson::class)->get($id);
    }

    /** POST /rest/asset/v1/program/{id}.json [operationId: updateProgramUsingPOST] */
    /**
     * Update Program Metadata
     *
     * Updates the target program's metadata. The channel may be updated after creation; doing so keeps Program Settings Channel and the Channel tag in sync, and is rejected if a child campaign uses a Change Program Status flow step. The type may only be set at creation. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\Program\Request $payload): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\IdJson::class)->post($id, $payload);
    }
}
