<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Program\Members\Export\ByExportId;

final class CancelJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/program/members/export/{exportId}/cancel.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Export\\Response',
    ];

    /**
     * Cancel Export Program Member Job
     *
     * Cancel export job. Required Permissions: Read-Only Lead
     */
    public function post(string $exportId): \MarketoSDK\DTOs\ResponseOf\Export\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Export\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['exportId' => $exportId]);
        return $result;
    }

}
