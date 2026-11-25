<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Program;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/program/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Program\\Response',
    ];

    /**
     * Get Program by Name
     *
     * Retrieves the program record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\Program\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Program\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
