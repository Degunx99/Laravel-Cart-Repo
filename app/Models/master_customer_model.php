<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_customer_model extends Model
{
    use HasFactory;

    protected $table = 'master_customer';
    protected $fillable = [
        'cust_name',
        'cust_gender',
        'cust_address',
        'cust_birthday',
    ];
}