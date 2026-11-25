<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\Asset\V2\Email;

final class Filter extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/asset/v2/email/filter [operationId: filterContentUsingGET_email] */
    /**
     * List Emails
     *
     * Filters and lists email assets by the given criteria. Required Permissions: Read-Only Assets, Access Design Studio, Access Email.
     *
     * Note: The totalItems value in the response includes A/B test variants in its count; however, the A/B test variant emails themselves are not returned in the result.
     */
    public static function get(\MarketoSDK\GetParams\Rest\Asset\V2\Email\Filter $params): \MarketoSDK\DTOs\Email\Filter\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\Asset\V2\Email\Filter::class)->get($params);
    }

}
