<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById;

final class DynamicContentJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/snippet/{id}/dynamicContent.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ModelResponse',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Dynamic Content
     *
     * Gets the list of dynamic content sections for the snippet. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Snippet\ById\DynamicContentJson $params = null): \MarketoSDK\DTOs\ModelResponse
    {
        /** @var \MarketoSDK\DTOs\ModelResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
