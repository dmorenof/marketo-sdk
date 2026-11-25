<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads;

final class DescribeJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/describe.json [operationId: describeUsingGET_2] */
    /**
     * Describe Lead
     *
     * Returns metadata about lead objects in the target instance, including a list of all fields available for interaction via the APIs. Required Permissions: Read-Only Lead, Read-Write Lead<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/mapi/#operation/describeUsingGET_6">Describe Lead2</a> endpoint instead.
     */
    public static function get(): \MarketoSDK\DTOs\ResponseOf\LeadAttribute
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\DescribeJson::class)->get();
    }
}
