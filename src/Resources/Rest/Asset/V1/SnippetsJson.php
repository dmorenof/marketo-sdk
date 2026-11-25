<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class SnippetsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/snippets.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Snippet\\Response',
    ];

    /**
     * Get Snippets
     *
     * Retrieves a list of accessible snippets from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets.
     *
     * Note: Fragments created with the new email designer may appear in this API's response, but some of the fields may be null or incomplete. For complete and reliable details of these assets, use the Fragments (New) APIs; refer to the <a href="https://developer.adobe.com/marketo-apis/api/asset#operation/filterContentUsingGET_fragment">List Fragments</a> endpoint.
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\SnippetsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Snippet\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/snippets.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Snippet\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\Snippet\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Snippet
     *
     * Creates a new snippet. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\Snippet\Request $payload): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Snippet\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
