<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Smart\CampaignUsedBy;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\CampaignUsedByAsset> */
final class UsedByCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\CampaignUsedByAsset::class;
}
