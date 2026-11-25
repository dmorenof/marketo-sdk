<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\StaticList\ById;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/staticList/{id}/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
    ];

    /**
     * Delete Static List
     *
     * Deletes the designated Static List. Required Permissions: Read-Write Asset
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }
}
