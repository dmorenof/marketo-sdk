<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Leads\Batch;

final class BatchIdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/leads/batch/{batchId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ImportLead\\Response',
        'validation' => [
            'batchId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Import Lead Status
     *
     * Returns the status of an import batch job. Required Permissions: Read-Write Lead
     */
    public function get(int $batchId): \MarketoSDK\DTOs\ResponseOf\ImportLead\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ImportLead\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['batchId' => $batchId]);
        return $result;
    }
}
