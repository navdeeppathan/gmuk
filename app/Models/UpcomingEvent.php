<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcomingEvent extends Model
{
    protected $fillable = [
        'title','description','event_date','event_time','location','image','status'
    ];
}