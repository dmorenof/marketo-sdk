<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Leads\Batch\ByBatchId;

final class FailuresJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/leads/batch/{batchId}/failures.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ObservableOfInputStreamContent',
        'validation' => [
            'batchId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Import Lead Failures
     *
     * Returns the list of failures for the import batch job. Required Permissions: Read-Write Lead
     */
    public function get(int $batchId): \MarketoSDK\DTOs\ObservableOfInputStreamContent
    {
        /** @var \MarketoSDK\DTOs\ObservableOfInputStreamContent $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['batchId' => $batchId]);
        return $result;
    }
}
