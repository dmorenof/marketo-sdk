<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class SubmitButtonJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/form/{id}/submitButton.json [operationId: updateFormSubmitButtonUsingPOST] */
    /**
     * Update Submit Button
     *
     * Updates the submit button configuration for the target form. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\SubmitButtonRequest $payload): \MarketoSDK\DTOs\ResponseOf\LpForm\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\SubmitButtonJson::class)->post($id, $payload);
    }
}
