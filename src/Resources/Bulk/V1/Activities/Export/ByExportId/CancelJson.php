<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Activities\Export\ByExportId;

final class CancelJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/activities/export/{exportId}/cancel.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Export\\Response',
    ];

    /**
     * Cancel Export Activity Job
     *
     * Cancel export job. Required Permissions: Read-Only Activity
     */
    public function post(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Export\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['exportId' => $exportId]);
        return $result;
    }
}
