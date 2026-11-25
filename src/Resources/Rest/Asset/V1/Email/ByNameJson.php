<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/email/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Email\\Response',
    ];

    /**
     * Get Email by Name
     *
     * Returns email records based on the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\Email\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Email\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
