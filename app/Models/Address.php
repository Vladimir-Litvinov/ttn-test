<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'partner_id',
        'title'
    ];
    use HasFactory;

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
