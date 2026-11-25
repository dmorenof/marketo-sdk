<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Update\LeadField\Request;

final class InputCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\Update\LeadField::class;
}
