<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId;

final class WarningsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/customobjects/{apiName}/import/{batchId}/warnings.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ObservableOfInputStreamContent',
        'validation' => [
            'batchId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Import Custom Object Warnings
     *
     * Returns the list of warnings for the import batch job. Required Permissions: Read-Write Custom Object
     */
    public function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\WarningsJson $identifier): \MarketoSDK\DTOs\ObservableOfInputStreamContent
    {
        /** @var \MarketoSDK\DTOs\ObservableOfInputStreamContent $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

}
