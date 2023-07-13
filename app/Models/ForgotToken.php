<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForgotToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token',
        'deleted_at'
    ];

    public $table = 'forgot_tokens';

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
