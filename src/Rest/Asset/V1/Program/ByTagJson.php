<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Program;

final class ByTagJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/program/byTag.json [operationId: getProgramListByTagUsingGET] */
    /**
     * Get Programs by Tag
     *
     * Retrieves a list of programs matching the tag type and tag values given. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\Program\ByTagJson $params): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\ByTagJson::class)->get($params);
    }

}
