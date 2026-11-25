<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Create\LeadField;

enum DataTypeEnum: string
{
    case Boolean = 'boolean';
    case Currency = 'currency';
    case Date = 'date';
    case Datetime = 'datetime';
    case Email = 'email';
    case Float_ = 'float';
    case Integer = 'integer';
    case Percent = 'percent';
    case Phone = 'phone';
    case Score = 'score';
    case String_ = 'string';
    case Url = 'url';
}
