<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById\Field;

final class FieldIdJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/field/{fieldId}.json [operationId: updateFormFieldUsingPOST] */
    /**
     * Update Form Field
     *
     * Updates the configuration for that target field. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Form\ById\Field\FieldIdJson $identifier, \MarketoSDK\DTOs\Update\FormField\Request $payload): \MarketoSDK\DTOs\ResponseOf\LpFormField\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\Field\FieldIdJson::class)->post($identifier, $payload);
    }

}
