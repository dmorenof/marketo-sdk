<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/emailTemplate/{id}/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Delete Email Template
     *
     * Deletes the designated email template. Required Permissions: Read-Write Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
