<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingAcc extends Model
{
    use HasFactory;

    protected $table = 'pending_accs';

    protected $fillable = [
        'id',
        'admin_name',
        'admin_email',
        'role',
    ];
}
