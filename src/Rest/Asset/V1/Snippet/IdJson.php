<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet;

final class IdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/snippet/{id}.json [operationId: getSnippetByIdUsingGET] */
    /**
     * Get Snippet by Id
     *
     * Retrieves the target snippet record. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Snippet\IdJson $params = null): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\IdJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/snippet/{id}.json [operationId: updateSnippetUsingPOST] */
    /**
     * Update Snippet Metadata
     *
     * Updates the metadata of the snippet. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\Snippet\Request $payload): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\IdJson::class)->post($id, $payload);
    }
}
