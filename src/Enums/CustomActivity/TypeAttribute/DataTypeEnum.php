<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\CustomActivity\TypeAttribute;

enum DataTypeEnum: string
{
    case Boolean = 'boolean';
    case Currency = 'currency';
    case Date = 'date';
    case Datetime = 'datetime';
    case Email = 'email';
    case Float_ = 'float';
    case Integer = 'integer';
    case Link = 'link';
    case Phone = 'phone';
    case String_ = 'string';
    case Text = 'text';
}
