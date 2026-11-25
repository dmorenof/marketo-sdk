<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\TagType;

final class ByNameJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/tagType/byName.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Tag\\Response',
    ];

    /**
     * Get Tag By Name
     *
     * Retrieves a tag by its name. This will also return the set of valid values for the tag. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V1\TagType\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Tag\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Tag\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
