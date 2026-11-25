<?php

declare(strict_types=1);

namespace MarketoSDK\Resources\Rest\Asset\V1\LandingPageTemplate\ById;

final class UnapproveJson extends \MarketoSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/rest/asset/v1/landingPageTemplate/{id}/unapprove.json',
        'responseType' => '\\MarketoSDK\\DTOs\\ResponseOf\\LpTemplate\\Response',
        'validation' => [
            'id' => [
                'format' => 'int32',
            ],
        ],
    ];

    /**
     * Unapprove Landing Page Template
     *
     * Unapproves the landing page template and reverts it to a draft-only state. Required Permissions: Approve Assets
     */
    public function post(int $id): \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response
    {
        /** @var \MarketoSDK\DTOs\ResponseOf\LpTemplate\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id]);
        return $result;
    }

}
