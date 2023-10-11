<?php

namespace App\Enums;


enum TicketStatus: string
{
    case IN_PROGRESS = 'IN_PROGRESS';
    case OPEN = 'OPEN';
    case CLOSE = 'CLOSE';
}
