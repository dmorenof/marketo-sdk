<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Snippet\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/snippet/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Snippet\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneSnippetRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Clone Snippet
     *
     * Clones the target snippet. Required Permissions: Read-Write Assets
     */
    public function post(int $id, ?\MarketoSDK\DTOs\CloneSnippetRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\Snippet\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Snippet\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
