<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Email\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneEmailRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Clone Email
     *
     * Clones the target email. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\CloneEmailRequest $payload): \MarketoSDK\DTOs\ResponseOf\Email\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Email\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
