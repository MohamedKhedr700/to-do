<?php

namespace App\Http\Authentication\Channels;

use Raid\Core\Authentication\Channels\Channel;
use Raid\Core\Authentication\Channels\Contracts\ChannelInterface;
use Raid\Core\Authentication\Channels\Contracts\Concerns\RunRules;
use Raid\Core\Authentication\Channels\Contracts\Concerns\RunSteps;
use Raid\Core\Authentication\Traits\Channels\HasRules;
use Raid\Core\Authentication\Traits\Channels\HasSteps;
use Raid\Core\Authentication\Workers\EmailWorker;

class EmailTwoFactorChannel extends Channel implements ChannelInterface, RunRules, RunSteps
{
    use HasRules;
    use HasSteps;

    public const NAME = 'email-2fa';
}
