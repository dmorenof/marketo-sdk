<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Form\ById;

final class ThankYouPageJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v1/form/{id}/thankYouPage.json [operationId: getThankYouPageByIdUsingGET] */
    /**
     * Get Thank You Page by Form Id
     *
     * Returns the thank you page configuration for a given form. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function get(int $id, ?\MarketoSDK\GetParams\Rest\Asset\V1\Form\ById\ThankYouPageJson $params = null): \MarketoSDK\DTOs\ResponseOf\ThankYouPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\ThankYouPageJson::class)->get($id, $params);
    }

    /** POST /rest/asset/v1/form/{id}/thankYouPage.json [operationId: updateThankYouPageByIdUsingPOST] */
    /**
     * Update Thank You Page
     *
     * Updates the thank you page configuration for a given form. This update is destructive and the resulting draft will not have any memory of the previous configuration. Required Permissions: Read-Only Assets, Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\Update\ThankYouPage\Request $payload): \MarketoSDK\DTOs\ResponseOf\ThankYouPage\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Form\ById\ThankYouPageJson::class)->post($id, $payload);
    }
}
