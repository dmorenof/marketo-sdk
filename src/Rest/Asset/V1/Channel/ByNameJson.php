<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Channel;

final class ByNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/channel/byName.json [operationId: getChannelByNameUsingGET] */
    /**
     * Get Channel by Name
     *
     * Retrieves channels based on the provided name. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V1\Channel\ByNameJson $params): \MarketoSDK\DTOs\ResponseOf\Channel\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Channel\ByNameJson::class)->get($params);
    }
}
