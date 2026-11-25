<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\TagType;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/tagType/byName.json [operationId: getTagByNameUsingGET] */
    /**
     * Get Tag By Name
     *
     * Retrieves a tag by its name. This will also return the set of valid values for the tag. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\TagType\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Tag\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\TagType\ByNameJson::class)->get($params);
    }

}
