<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class CloneJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/clone.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpForm\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\CloneFormRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Clone Form
     *
     * Clones the target form. Required Permissions: Read-Write Assets
     */
    public function post(int $id, ?\MarketoSDK\DTOs\CloneFormRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpForm\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
