<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
