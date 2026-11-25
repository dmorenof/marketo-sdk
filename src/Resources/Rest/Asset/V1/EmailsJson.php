<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class EmailsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/emails.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Email\\Response',
    ];

    /**
     * Get Emails
     *
     * Returns a list of emails matching the given filter parameters. Required Permissions: Read-Only Assets, Read-Write Assets.
     *
     * Note: Emails created with the new email designer may appear in this API's response, but some of the fields may be null or incomplete. For complete and reliable details of these assets, use the Emails (New) APIs; refer to the <a href="https://developer.adobe.com/marketo-apis/api/asset#operation/filterContentUsingGET_email">List Emails</a> endpoint.
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\EmailsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Email\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/emails.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Email\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\Email\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Email
     *
     * Creates a new email asset. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\Email\Request $payload): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Email\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
