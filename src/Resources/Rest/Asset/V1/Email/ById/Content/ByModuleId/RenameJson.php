<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\ByModuleId;

final class RenameJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/content/{moduleId}/rename.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailModule\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Rename Email Module
     *
     * Renames a module. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\RenameJson $identifier, \MarketoSDK\PostParams\Rest\Asset\V1\Email\ById\Content\ByModuleId\RenameJson $params): \MarketoSDK\DTOs\ResponseOf\EmailModule\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailModule\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }
}
