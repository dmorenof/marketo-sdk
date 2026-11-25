<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ScheduleCampaignData;

final class TokensCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Token::class;
}
