<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class ReArrangeJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/reArrange.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\ReArrangeRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update Field Positions
     *
     * Reorders the list of fields in a form. Required Permissions: Read-Write Assets
     */
    public function post(int $id, ?\MarketoSDK\DTOs\ReArrangeRequest $payload = null): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
