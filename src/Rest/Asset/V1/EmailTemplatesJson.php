<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1;

final class EmailTemplatesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/emailTemplates.json [operationId: getEmailTemplatesUsingGET] */
    /**
     * Get Email Templates
     *
     * Returns a list of email template records accessible in the target instance. Required Permissions: Read-Only Assets, Read-Write Assets.
     *
     * Note: Email templates created with the new email designer may appear in this API's response, but some of the fields may be null or incomplete. For complete and reliable details of these assets, use the Email Templates (New) APIs; refer to the <a href="https://developer.adobe.com/marketo-apis/api/asset#operation/filterContentUsingGET_emailtemplate">List Email Templates</a> endpoint.
     */
    public static function get(?\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplatesJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplatesJson::class)->get($params);
    }

    /** POST /rest/asset/v1/emailTemplates.json [operationId: createEmailTemplateUsingPOST] */
    /**
     * Create Email Template
     *
     * Creates a new email template. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\DTOs\Create\EmailTemplate\Request $payload): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\EmailTemplatesJson::class)->post($payload);
    }
}
