<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class SegmentationJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/segmentation.json [operationId: getSegmentationUsingGET] */
    /**
     * Get Segmentations
     *
     * Retrieves a list of accessible segmentations for the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\SegmentationJson $params = null): \MarketoSDK\DTOs\ResponseOf\Segmentation\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\SegmentationJson::class)->get($params);
    }
}
