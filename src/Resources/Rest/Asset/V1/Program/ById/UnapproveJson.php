<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Program\ById;

final class UnapproveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/program/{id}/unapprove.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Unapprove Program
     *
     * Unapproves the target program. Only valid for approved email programs. Required Permissions: Read-Write Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
