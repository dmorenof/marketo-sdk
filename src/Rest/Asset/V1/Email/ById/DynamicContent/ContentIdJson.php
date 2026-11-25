<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById\DynamicContent;

final class ContentIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/email/{id}/dynamicContent/{contentId}.json [operationId: getEmailDynamicContentUsingGET] */
    /**
     * Get Email Dynamic Content
     *
     * Retrieves the dynamic content record for the given section. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson $identifier, ?\MarketoSDK\GetParams\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailDynamicContent\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson::class)->get($identifier, $params);
    }

    /** POST /rest/asset/v1/email/{id}/dynamicContent/{contentId}.json [operationId: updateEmailDynamicContentUsingPOST] */
    /**
     * Update Email Dynamic Content Section
     *
     * Updates dynamic content in the given section. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson $identifier, \MarketoSDK\DTOs\Update\EmailDynamicContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\DynamicContent\ContentIdJson::class)->post($identifier, $payload);
    }

}
