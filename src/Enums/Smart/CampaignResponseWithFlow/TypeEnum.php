<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\Smart\CampaignResponseWithFlow;

enum TypeEnum: string
{
    case Batch = 'batch';
    case Default_ = 'default';
    case Trigger = 'trigger';
}
