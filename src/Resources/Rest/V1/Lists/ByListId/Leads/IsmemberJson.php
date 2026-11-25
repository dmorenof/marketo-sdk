<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Lists\ByListId\Leads;

final class IsmemberJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/lists/{listId}/leads/ismember.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\ListOperationOutputData',
        'validation' => [
            'listId' => [
                'format' => 'int32',
            ],
        ],
        'querySerialization' => [
            'id' => 'multi',
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\ListOperationRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Member of List
     *
     * Checks if leads are members of a given static list. Required Permissions: Read-Write Lead
     */
    public function get(int $listId, ?\MarketoSDK\GetParams\Rest\V1\Lists\ByListId\Leads\IsmemberJson $params = null): \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['listId' => $listId], parameters: $params);
        return $result;
    }
}
