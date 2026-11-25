<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class EmailTemplatesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/emailTemplates.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailTemplate\\Response',
    ];

    /**
     * Get Email Templates
     *
     * Returns a list of email template records accessible in the target instance. Required Permissions: Read-Only Assets, Read-Write Assets.
     *
     * Note: Email templates created with the new email designer may appear in this API's response, but some of the fields may be null or incomplete. For complete and reliable details of these assets, use the Email Templates (New) APIs; refer to the <a href="https://developer.adobe.com/marketo-apis/api/asset#operation/filterContentUsingGET_emailtemplate">List Email Templates</a> endpoint.
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\EmailTemplatesJson $params = null): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/emailTemplates.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailTemplate\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\EmailTemplate\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Email Template
     *
     * Creates a new email template. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\EmailTemplate\Request $payload): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
