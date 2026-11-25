<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1;

final class FormsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/forms.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpForm\\Response',
    ];

    /**
     * Get Forms
     *
     * Retrieves a list of accessible form records from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(?\MarketoSDK\GetParams\Rest\Asset\V1\FormsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpForm\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/forms.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpForm\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Create\\LpForm\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create Form
     *
     * Creates a new form. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\DTOs\Create\LpForm\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpForm\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
