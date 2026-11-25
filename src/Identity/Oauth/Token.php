<?php

declare(strict_types=1);

namespace MarketoSDK\Identity\Oauth;

final class Token extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /identity/oauth/token [operationId: identityUsingGET] */
    /**
     * Identity
     *
     * Retrieve an access token from Marketo Engage. Calls to this endpoint are not counted towards API call limit.
     *
     */
    public static function get(\MarketoSDK\GetParams\Identity\Oauth\Token $params): \MarketoSDK\DTOs\ResponseOf\Identity
    {
        return self::client()->resource(\MarketoSDK\Resources\Identity\Oauth\Token::class)->get($params);
    }

    /** POST /identity/oauth/token [operationId: identityUsingPOST] */
    /**
     * Identity
     *
     * Retrieve an access token from Marketo. Calls to this endpoint are not counted towards API call limit.
     *
     */
    public static function post(\MarketoSDK\PostParams\Identity\Oauth\Token $params): \MarketoSDK\DTOs\ResponseOf\Identity
    {
        return self::client()->resource(\MarketoSDK\Resources\Identity\Oauth\Token::class)->post($params);
    }
}
