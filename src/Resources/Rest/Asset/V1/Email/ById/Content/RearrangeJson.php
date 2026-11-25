<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content;

final class RearrangeJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/email/{id}/content/rearrange.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\EmailModule\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => 'string',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Rearrange Email Modules
     *
     * Rearranges the modules in an email. Required Permissions: Read-Write Assets
     */
    public function post(int $id, ?string $payload = null): \MarketoSDK\DTOs\ResponseOf\EmailModule\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\EmailModule\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
