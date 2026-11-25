<?php

declare(strict_types=1);

namespace MarketoSDK\Enums\StateTransitionRequest;

enum ActionEnum: string
{
    case Approve = 'approve';
    case CreateDraft = 'create_draft';
    case Discard = 'discard';
    case Unapprove = 'unapprove';
}
