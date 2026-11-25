<?php

declare(strict_types=1);

namespace MarketoSDK\Collections\ObjectLinkableObject;

final class FieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \MarketoSDK\DTOs\ObjectLinkableObjectField::class;
}
