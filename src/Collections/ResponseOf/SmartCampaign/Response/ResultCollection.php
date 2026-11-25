<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\SmartCampaign\Response;

final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\Campaign\Response::class;
}
