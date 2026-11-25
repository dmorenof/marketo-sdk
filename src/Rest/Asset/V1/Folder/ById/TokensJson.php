<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Folder\ById;

final class TokensJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/folder/{id}/tokens.json [operationId: getTokensByFolderIdUsingGET] */
    /**
     * Get Tokens by Folder Id
     *
     * Retrieves the list of available My Tokens in the target folder. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Folder\ById\TokensJson $params = null): \MarketoSDK\DTOs\ResponseOf\Token\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Folder\ById\TokensJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/folder/{id}/tokens.json [operationId: addTokenTOFolderUsingPOST] */
    /**
     * Create Token
     *
     * Create or update a token in the parent folder. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Create\Token\Request $payload): \MarketoSDK\DTOs\ResponseOf\Token\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Folder\ById\TokensJson::class)->post($id, $payload);
    }
}
