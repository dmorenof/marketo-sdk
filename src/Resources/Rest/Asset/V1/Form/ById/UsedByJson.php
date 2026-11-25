<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class UsedByJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/form/{id}/usedBy.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\FormUsedBy\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Form Used By
     *
     * Returns a list of asset records which depend on a given form. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Form\ById\UsedByJson $params = null): \MarketoSDK\DTOs\ResponseOf\FormUsedBy\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\FormUsedBy\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
