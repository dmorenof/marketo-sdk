<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById;

final class VariablesJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v1/email/{id}/variables.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailVariable\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Get Email Variables
     *
     * Returns a list of the available variables in an email. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public function get(int $id): \MarketoSDK\DTOs\ResponseOf\EmailVariable\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailVariable\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id]);
        return $result;
    }

}
