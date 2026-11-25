<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Program\Members\Import\ByBatchId;

final class StatusJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/bulk/v1/program/members/import/{batchId}/status.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ImportProgramMember\\Response',
        'validation' => [
            'batchId' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Import Program Member Status
     *
     * Returns the status of an import batch job. Required Permissions: Read-Write Lead
     */
    public function get(int $batchId): \MarketoSDK\DTOs\ResponseOf\ImportProgramMember\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ImportProgramMember\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['batchId' => $batchId]);
        return $result;
    }

}
