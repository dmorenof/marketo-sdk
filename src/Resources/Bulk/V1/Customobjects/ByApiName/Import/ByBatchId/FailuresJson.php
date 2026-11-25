<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId;

final class FailuresJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/customobjects/{apiName}/import/{batchId}/failures.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ObservableOfInputStreamContent',
        'validation' => [
            'batchId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Import Custom Object Failures
     *
     * Returns the list of failures for the import batch job. Required Permissions: Read-Write Custom Object
     */
    public function get(\MarketoSDK\PathParams\Bulk\V1\Customobjects\ByApiName\Import\ByBatchId\FailuresJson $identifier): \MarketoSDK\DTOs\ObservableOfInputStreamContent
    {
        /** @var \MarketoSDK\DTOs\ObservableOfInputStreamContent $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

}
