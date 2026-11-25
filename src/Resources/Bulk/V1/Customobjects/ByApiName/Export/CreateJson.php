<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Export;

final class CreateJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/customobjects/{apiName}/export/create.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Export\\Response',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Export\\CustomObject\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create Export Custom Object Job
     *
     * Create export job for search criteria defined via "filter" parameter. Request returns the "exportId" which is passed as a parameter in subsequent calls to Bulk Export Custom Object endpoints. Use Enqueue Export Custom Object Job endpoint to queue the export job for processing. Use Get Export Custom Object Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Custom Object
     */
    public function post(string $apiName, ?\MarketoSDK\DTOs\Export\CustomObject\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Export\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['apiName' => $apiName]) : $this->executeArguments(self::operation(self::POST), path: ['apiName' => $apiName]);
        return $result;
    }
}
