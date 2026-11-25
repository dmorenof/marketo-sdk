<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Program\ById;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/program/{id}/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Delete Program
     *
     * Deletes the target program. The program may not contain any assets which are in use outside the program. Required Permissions: Read-Write Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
