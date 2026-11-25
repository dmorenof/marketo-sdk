<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet\ById;

final class ContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/snippet/{id}/content.json [operationId: getSnippetContentByIdUsingGET] */
    /**
     * Get Snippet Content
     *
     * Retrieves the content of the target snippet. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Snippet\ById\ContentJson $params = null): \MarketoSDK\DTOs\ResponseOf\SnippetContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\ContentJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/snippet/{id}/content.json [operationId: updateContentUsingPOST_1] */
    /**
     * Update Snippet Content
     *
     * Updates the content of the target snippet. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\PostParams\Rest\Asset\V1\Snippet\ById\ContentJson $params): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\ContentJson::class)->post($id, $params);
    }
}
