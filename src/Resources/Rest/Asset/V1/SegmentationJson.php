<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class SegmentationJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/segmentation.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Segmentation\\Response',
    ];

    /**
     * Get Segmentations
     *
     * Retrieves a list of accessible segmentations for the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\SegmentationJson $params = null): \MarketoSDK\DTOs\ResponseOf\Segmentation\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Segmentation\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
