<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1;

final class LeadsJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/leads.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ImportLead\\Response',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
        ],
    ];

    /**
     * Import Leads
     *
     * Imports a file containing data records into the target instance. Required Permissions: Read-Write Lead
     */
    public function post(\MarketoSDK\PostParams\Bulk\V1\LeadsJson $params): \MarketoSDK\DTOs\ResponseOf\ImportLead\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ImportLead\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
