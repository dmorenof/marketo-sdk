<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\SmartCampaign\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\Campaign\Response> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\Campaign\Response::class;
}
