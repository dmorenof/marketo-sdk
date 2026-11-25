<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Activities\Export\ByExportId;

final class EnqueueJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/activities/export/{exportId}/enqueue.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Export\\Response',
    ];

    /**
     * Enqueue Export Activity Job
     *
     * Enqueue export job. This will place export job in queue, and will start the job when computing resources become available. The export job must be in "Created" state. Use Get Export Activity Job Status endpoint to retrieve status of export job. Required Permissions: Read-Only Activity
     */
    public function post(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Export\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['exportId' => $exportId]);
        return $result;
    }
}
