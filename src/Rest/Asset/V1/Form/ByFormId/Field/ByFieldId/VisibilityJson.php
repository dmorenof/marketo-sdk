<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ByFormId\Field\ByFieldId;

final class VisibilityJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{formId}/field/{fieldId}/visibility.json [operationId: addFormFieldVisibilityRuleUsingPOST] */
    /**
     * Add Form Field Visibility Rules
     *
     * Adds a visibility rule to the target form field. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Form\ByFormId\Field\ByFieldId\VisibilityJson $identifier, \MarketoSDK\DTOs\Add\FormFieldVisibility\Request $payload): \MarketoSDK\DTOs\ResponseOf\FormVisibilityRule\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ByFormId\Field\ByFieldId\VisibilityJson::class)->post($identifier, $payload);
    }
}
