<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\Email\ContentDTO;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\MarketoSDK\DTOs\AssociatedStateDTO> */
final class AssociatedStatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\AssociatedStateDTO::class;
}
