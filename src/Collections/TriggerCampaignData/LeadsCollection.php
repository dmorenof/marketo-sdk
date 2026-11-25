<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\TriggerCampaignData;

final class LeadsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\InputLead::class;
}
