<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "type",
        "email",
        "address",
        "city",
        "state",
        "postal_code"
    ];


    /**
     * Get all of the invoices for the Customer
     *
     *
     *
     * */
    public function invoices(){

        return $this->hasMany(Invoice::Class);
    }
}
