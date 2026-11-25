<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Form\FieldVisibility\Request;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\VisibilityRuleRequest> */
final class RulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\VisibilityRuleRequest::class;
}
