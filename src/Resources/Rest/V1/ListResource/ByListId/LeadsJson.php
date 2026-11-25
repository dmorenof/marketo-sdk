<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\ListResource\ByListId;

final class LeadsJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/list/{listId}/leads.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadByListId',
        'validation' => [
            'listId' => [
                'format' => 'int32',
            ],
        ],
        'querySerialization' => [
            'fields' => 'multi',
        ],
    ];

    /**
     * Get Leads By List Id
     *
     * Retrieves person records which are members of the given static list. Required Permissions: Read-Only Lead, Read-Write Lead
     */
    public function get(int $listId, ?\MarketoSDK\GetParams\Rest\V1\ListResource\ByListId\LeadsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadByListId
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadByListId $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['listId' => $listId], parameters: $params);
        return $result;
    }

}
