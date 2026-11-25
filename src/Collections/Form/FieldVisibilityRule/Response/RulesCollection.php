<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Form\FieldVisibilityRule\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\Form\VisibilityRuleDTO> */
final class RulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Form\VisibilityRuleDTO::class;
}
