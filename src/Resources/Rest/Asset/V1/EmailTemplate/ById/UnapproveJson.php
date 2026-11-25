<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\EmailTemplate\ById;

final class UnapproveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/emailTemplate/{id}/unapprove.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailTemplate\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Unapprove Email Template Draft
     *
     * Unapproves the current approved version of the Email Template. Required Permissions: Approve Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailTemplate\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
