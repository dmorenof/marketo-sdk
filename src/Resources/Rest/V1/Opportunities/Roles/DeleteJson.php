<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Opportunities\Roles;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/opportunities/roles/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObject',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\CustomObject\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete Opportunity Roles
     *
     * Deletes a list of opportunities from the target instance. Required Permissions: Read-Write Named Opportunity
     */
    public function post(?\MarketoSDK\DTOs\Delete\CustomObject\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObject $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
