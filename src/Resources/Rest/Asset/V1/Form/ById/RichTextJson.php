<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class RichTextJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/richText.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpFormField\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Add\\RichText\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Rich Text Field
     *
     * Adds a rich-text type field to the form. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Add\RichText\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpFormField\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }
}
