<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Folder\ById;

final class ContentJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/folder/{id}/content.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\FolderContent\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Folder Contents
     *
     * Returns records for the contents of a given folder. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, \MarketoSDK\GetParams\Rest\Asset\V1\Folder\ById\ContentJson $params): \MarketoSDK\DTOs\ResponseOf\FolderContent\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\FolderContent\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
