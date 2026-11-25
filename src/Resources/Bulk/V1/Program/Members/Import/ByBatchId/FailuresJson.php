<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Program\Members\Import\ByBatchId;

final class FailuresJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/program/members/import/{batchId}/failures.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ObservableOfInputStreamContent',
        'validation' => [
            'batchId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Import Program Member Failures
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
