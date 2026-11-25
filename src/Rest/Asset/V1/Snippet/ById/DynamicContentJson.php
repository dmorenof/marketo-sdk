<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Snippet\ById;

final class DynamicContentJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/snippet/{id}/dynamicContent.json [operationId: getDynamicContentUsingGET] */
    /**
     * Get Dynamic Content
     *
     * Gets the list of dynamic content sections for the snippet. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Snippet\ById\DynamicContentJson $params = null): \MarketoSDK\DTOs\ModelResponse
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById\DynamicContentJson::class)->get($id, $params);
    }

}
