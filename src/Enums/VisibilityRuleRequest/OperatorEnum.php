<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\VisibilityRuleRequest;

enum OperatorEnum: string
{
    case After = 'after';
    case AtLeast = 'atLeast';
    case AtMost = 'atMost';
    case Before = 'before';
    case Between = 'between';
    case Contains = 'contains';
    case EndsWith = 'endsWith';
    case GreaterThan = 'greaterThan';
    case InPast = 'inPast';
    case InTimeFrame = 'inTimeFrame';
    case Is = 'is';
    case IsEmpty = 'isEmpty';
    case IsNot = 'isNot';
    case IsNotEmpty = 'isNotEmpty';
    case LessThan = 'lessThan';
    case NotBetween = 'notBetween';
    case NotContains = 'notContains';
    case NotEndsWith = 'notEndsWith';
    case NotInPast = 'notInPast';
    case NotInTimeFrame = 'notInTimeFrame';
    case NotStartsWith = 'notStartsWith';
    case OnOrAfter = 'onOrAfter';
    case OnOrBefore = 'onOrBefore';
    case StartsWith = 'startsWith';
}
