<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Opportunities;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/opportunities/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\CustomObject',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\CustomObject\\Request',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Delete Opportunities
     *
     * Deletes a list of opportunity records from the target instance. Input records should only have one member, based on the value of 'dedupeBy'. Required Permissions: Read-Write Named Opportunity
     */
    public function post(?\MarketoSDK\DTOs\Delete\CustomObject\Request $payload = null): \MarketoSDK\DTOs\ResponseOf\CustomObject
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\CustomObject $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }
}
