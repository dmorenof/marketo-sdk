<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Form\FieldVisibility\Request;

enum RuleTypeEnum: string
{
    case AlwaysShow = 'alwaysShow';
    case Hide = 'hide';
    case Show = 'show';
}
