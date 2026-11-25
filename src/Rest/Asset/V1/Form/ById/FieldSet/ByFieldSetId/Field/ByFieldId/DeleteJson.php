<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById\FieldSet\ByFieldSetId\Field\ByFieldId;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/fieldSet/{fieldSetId}/field/{fieldId}/delete.json [operationId: deleteFormFieldFromFieldSetUsingPOST] */
    /**
     * Delete Field from Fieldset
     *
     * Removes the target field from the fieldset. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Form\ById\FieldSet\ByFieldSetId\Field\ByFieldId\DeleteJson $identifier): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\FieldSet\ByFieldSetId\Field\ByFieldId\DeleteJson::class)->post($identifier);
    }
}
