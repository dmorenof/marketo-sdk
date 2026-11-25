<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById;

final class SendSampleJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/sendSample.json [operationId: sendSampleEmailUsingPOST] */
    /**
     * Send Sample Email
     *
     * Sends a sample email to the given email address. Leads may be impersonated to populate data for tokens and dynamic content. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, \MarketoSDK\DTOs\SendSampleEmailRequest $payload): \MarketoSDK\DTOs\ResponseOf\SendSample\Response
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\SendSampleJson::class)->post($id, $payload);
    }
}
