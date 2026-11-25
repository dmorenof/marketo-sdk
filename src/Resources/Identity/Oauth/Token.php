<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Identity\Oauth;

final class Token extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/identity/oauth/token',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Identity',
    ];

    /**
     * Identity
     *
     * Retrieve an access token from Marketo Engage. Calls to this endpoint are not counted towards API call limit.
     *
     */
    public function get(\MarketoSDK\GetParams\Identity\Oauth\Token $params): \MarketoSDK\DTOs\ResponseOf\Identity
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Identity $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/identity/oauth/token',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Identity',
    ];

    /**
     * Identity
     *
     * Retrieve an access token from Marketo. Calls to this endpoint are not counted towards API call limit.
     *
     */
    public function post(\MarketoSDK\PostParams\Identity\Oauth\Token $params): \MarketoSDK\DTOs\ResponseOf\Identity
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Identity $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
