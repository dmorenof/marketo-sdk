<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\NamedAccountLists;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/v1/namedAccountLists/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\NamedAccountList',
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Delete\\NamedAccountList\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete Named Account Lists
     *
     * Delete named account lists by dedupe fields, or by id field. Required Permissions: Read-Write Named Account List
     */
    public function post(\MarketoSDK\DTOs\Delete\NamedAccountList\Request $payload): \MarketoSDK\DTOs\ResponseOf\NamedAccountList
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\NamedAccountList $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
