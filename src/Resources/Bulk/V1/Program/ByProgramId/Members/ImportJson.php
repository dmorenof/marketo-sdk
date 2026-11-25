<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Bulk\V1\Program\ByProgramId\Members;

final class ImportJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bulk/v1/program/{programId}/members/import.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ImportProgramMember\\Response',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
        ],
    ];

    /**
     * Import Program Members
     *
     * Imports a file containing data records into the target instance. Required Permissions: Read-Write Lead
     */
    public function post(string $programId, \MarketoSDK\PostParams\Bulk\V1\Program\ByProgramId\Members\ImportJson $params): \MarketoSDK\DTOs\ResponseOf\ImportProgramMember\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ImportProgramMember\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['programId' => $programId], parameters: $params);
        return $result;
    }

}
