<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById\Field\ByFieldId;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/field/{fieldId}/delete.json [operationId: deleteFormFieldUsingPOST] */
    /**
     * Delete Form Field
     *
     * Deletes a field from a form. Required Permissions: Read-Write Assets
     */
    public static function post(\MarketoSDK\PathParams\Rest\Asset\V1\Form\ById\Field\ByFieldId\DeleteJson $identifier): \MarketoSDK\DTOs\ResponseOf\Id\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\Field\ByFieldId\DeleteJson::class)->post($identifier);
    }
}
