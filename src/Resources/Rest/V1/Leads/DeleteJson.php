<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/leads/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Lead',
        'querySerialization' => [
            'id' => 'multi',
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\Lead\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete Leads
     *
     * Delete a list of leads from the destination instance. Required Permissions: Read-Write Lead
     */
    public function post(?\MarketoSDK\PostParams\Rest\V1\Leads\DeleteJson $params = null): \MarketoSDK\DTOs\ResponseOf\Lead
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Lead $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
