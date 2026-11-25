<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Email\ById;

final class Delete extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v2/email/{id}/delete',
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\MarketoSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\MarketoSDK\\DTOs\\Delete\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete Email
     *
     * Deletes an email asset by its ID. Required Permissions: Read-Write Assets, Access Design Studio, Delete Email.
     */
    public function post(string $id, \MarketoSDK\PostParams\Rest\Asset\V2\Email\ById\Delete $params): \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\Delete\Response|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
