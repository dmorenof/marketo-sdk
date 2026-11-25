<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads\Programs;

final class ProgramIdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads/programs/{programId}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Lead',
        'validation' => [
            'programId' => [
                'format' => 'int32',
            ],
        ],
        'querySerialization' => [
            'fields' => 'multi',
        ],
    ];

    /**
     * Get Leads by Program Id
     *
     * Retrieves a list of leads which are members of the designated program. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(int $programId, ?\MarketoSDK\GetParams\Rest\V1\Leads\Programs\ProgramIdJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Lead $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['programId' => $programId], parameters: $params);
        return $result;
    }

}
