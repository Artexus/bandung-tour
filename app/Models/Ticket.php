<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'name',
        'price',
    ];

    public $table = 'tickets';

    public function sites()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'ticket_id');
    }
}
