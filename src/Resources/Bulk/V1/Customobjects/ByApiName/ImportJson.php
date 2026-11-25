<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName;

final class ImportJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/customobjects/{apiName}/import.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ImportCustomObject\\Response',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
        ],
    ];

    /**
     * Import Custom Objects
     *
     * Imports a file containing data records into the target instance. Required Permissions: Read-Write Custom Object
     */
    public function post(string $apiName, \MarketoSDK\PostParams\Bulk\V1\Customobjects\ByApiName\ImportJson $params): \MarketoSDK\DTOs\ResponseOf\ImportCustomObject\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ImportCustomObject\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['apiName' => $apiName], parameters: $params);
        return $result;
    }

}
