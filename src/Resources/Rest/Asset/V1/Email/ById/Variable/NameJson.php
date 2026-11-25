<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Variable;

final class NameJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/variable/{name}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailVariable\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Update\\Variable\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Email Variable
     *
     * Updates the value of a given variable in an email. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Variable\NameJson $identifier, ?\MarketoSDK\DTOs\Update\Variable\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\EmailVariable\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailVariable\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: $identifier) : $this->executeArguments(self::operation(self::POST), path: $identifier);
        return $result;
    }

}
