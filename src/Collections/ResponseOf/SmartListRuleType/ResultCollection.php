<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ResponseOf\SmartListRuleType;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Smart\ListRuleTypes> */
final class ResultCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Smart\ListRuleTypes::class;
}
