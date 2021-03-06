<?php

namespace App\Thrust\Metrics;

use App\Ticket;
use App\TicketType;
use BadChoice\Thrust\Metrics\PartitionMetric;

class TicketTypeMetric extends PartitionMetric
{
    public function calculate()
    {
        return $this->count(Ticket::class, 'type');
    }

    public function uriKey()
    {
        return 'tickets-type';
    }

}