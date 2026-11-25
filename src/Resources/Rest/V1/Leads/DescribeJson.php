<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\V1\Leads;

final class DescribeJson extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/v1/leads/describe.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LeadAttribute',
    ];

    /**
     * Describe Lead
     *
     * Returns metadata about lead objects in the target instance, including a list of all fields available for interaction via the APIs. Required Permissions: Read-Only Lead, Read-Write Lead<br><br><b>Note: This endpoint has been superseded.</b>  Use <a href="https://developer.adobe.com/marketo-apis/api/mapi/#operation/describeUsingGET_6">Describe Lead2</a> endpoint instead.
     */
    public function get(): \MarketoSDK\DTOs\ResponseOf\LeadAttribute
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LeadAttribute $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
