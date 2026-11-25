<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Program\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/program/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Program\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneProgramRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Clone Program
     *
     * Clones the target program. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\CloneProgramRequest $payload): \MarketoSDK\DTOs\ResponseOf\Program\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Program\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
