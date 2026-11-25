<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById;

final class UnapproveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/snippet/{id}/unapprove.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Snippet\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Unapprove Snippet
     *
     * Unapproves the current version of the snippet. The snippet may not be in use. The snippet will be reverted to a draft-only state. Required Permissions: Approve Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Snippet\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
