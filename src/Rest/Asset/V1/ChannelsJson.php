<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class ChannelsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/channels.json [operationId: getAllChannelsUsingGET] */
    /**
     * Get Channels
     *
     * Retrieves all channels. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\ChannelsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Channel\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\ChannelsJson::class)->get($params);
    }
}
