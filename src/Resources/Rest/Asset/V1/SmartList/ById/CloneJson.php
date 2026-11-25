<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\SmartList\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/smartList/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\SmartList\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneSmartListRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Clone Smart List
     *
     * Clones the designated Smart List. Required Permissions: Read-Write Asset
     */
    public function post(int $id, \MarketoSDK\DTOs\CloneSmartListRequest $payload): \MarketoSDK\DTOs\ResponseOf\SmartList\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\SmartList\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
