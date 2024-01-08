<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TransactionStatus extends Enum
{

    public const WAITING = 0;
    public const TIME_OUT = 1;
    public const SUCCESS = 2;
    public const FAIL = 3;
    public const CANCEL = 4;

}
