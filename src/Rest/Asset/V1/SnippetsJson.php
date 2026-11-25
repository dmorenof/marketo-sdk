<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class SnippetsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/snippets.json [operationId: getSnippetUsingGET] */
    /**
     * Get Snippets
     *
     * Retrieves a list of accessible snippets from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets.
     *
     * Note: Fragments created with the new email designer may appear in this API's response, but some of the fields may be null or incomplete. For complete and reliable details of these assets, use the Fragments (New) APIs; refer to the <a href="https://developer.adobe.com/marketo-apis/api/asset#operation/filterContentUsingGET_fragment">List Fragments</a> endpoint.
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\SnippetsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SnippetsJson::class)->get($params);
    }

    /** POST /rest/asset/v1/snippets.json [operationId: createSnippetUsingPOST] */
    /**
     * Create Snippet
     *
     * Creates a new snippet. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\Snippet\Request $payload): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SnippetsJson::class)->post($payload);
    }
}
