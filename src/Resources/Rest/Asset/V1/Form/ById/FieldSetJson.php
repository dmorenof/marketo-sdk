<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById;

final class FieldSetJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/fieldSet.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpFormField\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
        'requestBody' => [
            'type' => '\\MarketoSDK\\DTOs\\Add\\FormFieldSet\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Add Fieldset to Form
     *
     * Adds a field set to the target form. Required Permissions: Read-Write Assets
     */
    public function post(int $id, \MarketoSDK\DTOs\Add\FormFieldSet\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpFormField\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['id' => $id]);
        return $result;
    }

}
