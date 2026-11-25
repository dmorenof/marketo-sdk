<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById\Content;

final class HtmlIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/content/{htmlId}.json [operationId: updateEmailComponentContentUsingPOST] */
    /**
     * Update Email Content Section
     *
     * Updates the content in the given section. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content\HtmlIdJson $identifier, \MarketoSDK\DTOs\Update\EmailComponentContent\Request $payload): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\HtmlIdJson::class)->post($identifier, $payload);
    }

}
