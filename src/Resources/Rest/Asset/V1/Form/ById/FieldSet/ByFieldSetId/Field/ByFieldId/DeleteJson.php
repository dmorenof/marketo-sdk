<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\Form\ById\FieldSet\ByFieldSetId\Field\ByFieldId;

final class DeleteJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/form/{id}/fieldSet/{fieldSetId}/field/{fieldId}/delete.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\Id\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Delete Field from Fieldset
     *
     * Removes the target field from the fieldset. Required Permissions: Read-Write Assets
     */
    public function post(\MarketoSDK\PathParams\Rest\Asset\V1\Form\ById\FieldSet\ByFieldSetId\Field\ByFieldId\DeleteJson $identifier): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\Id\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier);
        return $result;
    }

}
