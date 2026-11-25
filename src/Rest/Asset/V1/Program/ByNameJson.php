<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Program;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/program/byName.json [operationId: getProgramByNameUsingGET] */
    /**
     * Get Program by Name
     *
     * Retrieves the program record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\Program\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Program\ByNameJson::class)->get($params);
    }

}
