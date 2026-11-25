<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Program;

final class ByTagJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/program/byTag.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Program\\Response',
    ];

    /**
     * Get Programs by Tag
     *
     * Retrieves a list of programs matching the tag type and tag values given. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\Program\ByTagJson $params): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Program\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
