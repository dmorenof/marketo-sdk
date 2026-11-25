<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Smart\CampaignRules;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\CampaignRuleType> */
final class FiltersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\CampaignRuleType::class;
}
