<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet\ById\DynamicContent;

final class SegmentIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/snippet/{id}/dynamicContent/{segmentId}.json [operationId: updateDynamicContentUsingPOST] */
    /**
     * Update Snippet Dynamic Content
     *
     * Updates the target dynamic content section. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Snippet\ById\DynamicContent\SegmentIdJson $identifier, \MarketoSDK\DTOs\Update\SnippetDynamicContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\DynamicContent\SegmentIdJson::class)->post($identifier, $payload);
    }
}
