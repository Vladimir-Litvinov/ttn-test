<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'firm',
        'code',
        'responsible_person'
    ];

    public function address()
    {
        return $this->hasMany(Address::class, 'partner_id');
    }

}
