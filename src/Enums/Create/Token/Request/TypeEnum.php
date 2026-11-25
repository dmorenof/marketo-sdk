<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Create\Token\Request;

enum TypeEnum: string
{
    case Date = 'date';
    case Number = 'number';
    case RichText = 'rich text';
    case Score = 'score';
    case SfdcCampaign = 'sfdc campaign';
    case Text = 'text';
}
