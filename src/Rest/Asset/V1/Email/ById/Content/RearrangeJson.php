<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V1\Email\ById\Content;

final class RearrangeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/asset/v1/email/{id}/content/rearrange.json [operationId: rearrangeModulesUsingPOST] */
    /**
     * Rearrange Email Modules
     *
     * Rearranges the modules in an email. Required Permissions: Read-Write Assets
     */
    public static function post(int $id, ?string $payload = null): \MarketoSDK\DTOs\ResponseOf\EmailModule\Response
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\RearrangeJson::class)->post($id);
        }
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V1\Email\ById\Content\RearrangeJson::class)->post($id, $payload);
    }

}
