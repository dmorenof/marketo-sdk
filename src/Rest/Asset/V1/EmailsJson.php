<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class EmailsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/emails.json [operationId: getEmailUsingGET] */
    /**
     * Get Emails
     *
     * Returns a list of emails matching the given filter parameters. Required Permissions: Read-Only Assets, Read-Write Assets.
     *
     * Note: Emails created with the new email designer may appear in this API's response, but some of the fields may be null or incomplete. For complete and reliable details of these assets, use the Emails (New) APIs; refer to the <a href="https://developer.adobe.com/marketo-apis/api/asset#operation/filterContentUsingGET_email">List Emails</a> endpoint.
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\EmailsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailsJson::class)->get($params);
    }

    /** POST /rest/asset/v1/emails.json [operationId: createEmailUsingPOST] */
    /**
     * Create Email
     *
     * Creates a new email asset. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\Email\Request $payload): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailsJson::class)->post($payload);
    }

}
