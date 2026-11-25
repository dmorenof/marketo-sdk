<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\File;

final class IdJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/file/{id}.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\File\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get File by Id
     *
     * Returns the file record for the given id. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id): \MarketoSDK\DTOs\ResponseOf\File\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\File\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id]);
        return $result;
    }

}
