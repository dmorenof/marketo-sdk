<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\SmartCampaigns;

final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\Campaign::class;
}
