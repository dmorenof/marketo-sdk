<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Lists\ByListId;

final class LeadsJson extends \MarketoSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/rest/v1/lists/{listId}/leads.json',
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
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Remove from List
     *
     * Removes a given set of person records from a target static list. Required Permissions: Read-Write Lead
     */
    public function delete(int $listId, \MarketoSDK\DeleteParams\Rest\V1\Lists\ByListId\LeadsJson $params): \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['listId' => $listId], parameters: $params);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/lists/{listId}/leads.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Lead',
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
    public function get(int $listId, ?\MarketoSDK\GetParams\Rest\V1\Lists\ByListId\LeadsJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Lead $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['listId' => $listId], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/lists/{listId}/leads.json',
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
     * Add to List
     *
     * Adds a given set of person records to a target static list. There is a limit of 300 lead ids per request. Required Permissions: Read-Write Lead
     */
    public function post(int $listId, ?\MarketoSDK\PostParams\Rest\V1\Lists\ByListId\LeadsJson $params = null): \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\ListOperationOutputData $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['listId' => $listId], parameters: $params);
        return $result;
    }

}
