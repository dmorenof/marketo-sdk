<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId;

final class StatusJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/customobjects/{apiName}/import/{batchId}/status.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ImportCustomObject\\Response',
        'validation' => [
            'batchId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Import Custom Object Status
     *
     * Returns the status of an import batch job. Required Permissions: Read-Write Custom Object
     */
    public function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\StatusJson $identifier): \MarketoSDK\DTOs\ResponseOf\ImportCustomObject\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ImportCustomObject\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

}
