<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V2\Email;

final class Filter extends \MarketoSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rest/asset/v2/email/filter',
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\MarketoSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\MarketoSDK\\DTOs\\Email\\Filter\\Response',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\MarketoSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'status' => 'multi',
        ],
    ];

    /**
     * List Emails
     *
     * Filters and lists email assets by the given criteria. Required Permissions: Read-Only Assets, Access Design Studio, Access Email.
     *
     * Note: The totalItems value in the response includes A/B test variants in its count; however, the A/B test variant emails themselves are not returned in the result.
     */
    public function get(\MarketoSDK\GetParams\Rest\Asset\V2\Email\Filter $params): \MarketoSDK\DTOs\Email\Filter\Response|\MarketoSDK\DTOs\ErrorResponse|null
    {
        /** @var \MarketoSDK\DTOs\Email\Filter\Response|\MarketoSDK\DTOs\ErrorResponse|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
