<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class FieldSetJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/fieldSet.json [operationId: addFieldSetUsingPOST] */
    /**
     * Add Fieldset to Form
     *
     * Adds a field set to the target form. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Add\FormFieldSet\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\FieldSetJson::class)->post($id, $payload);
    }

}
