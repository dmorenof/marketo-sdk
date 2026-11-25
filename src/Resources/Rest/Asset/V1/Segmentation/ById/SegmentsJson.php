<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Segmentation\ById;

final class SegmentsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/segmentation/{id}/segments.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Segments\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Segments For Segmentation
     *
     * Retrieves a list of segments inside the target segmentation. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Segmentation\ById\SegmentsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Segments\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Segments\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
