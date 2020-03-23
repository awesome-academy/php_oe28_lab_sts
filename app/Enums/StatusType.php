<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StatusType extends Enum
{
    const StatusInactive = 1;
    const StatusActive = 2;
    const StatusDone = 3;
}
