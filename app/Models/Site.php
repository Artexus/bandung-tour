<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_name',
        'description',
        'path',
        'total_votes',
        'average_rating',
    ];

    public $table = 'sites';

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'site_id');
    }
}
