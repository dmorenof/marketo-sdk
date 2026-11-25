<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/content/{moduleId}/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailModule\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Delete Module
     *
     * Deletes the given module from the email. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\DeleteJson $identifier): \MarketoSDK\DTOs\ResponseOf\EmailModule\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailModule\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier);
        return $result;
    }
}
