<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [

    ];


    /**
     * Get the user that owns the Invoice
     *
     *
     *
     * */
    public function customer(): BelongsTo{

        return $this->belongsTo(Customer::Class);
    }
}