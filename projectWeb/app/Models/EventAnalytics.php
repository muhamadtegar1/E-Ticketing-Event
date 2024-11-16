<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventAnalytics extends Model
{
    protected $fillable = [
        'event_id', 'total_ticket_sold', 'total_revenue', 'average_rating', 'event_date'
    ];

    // Relationship definitions...
}