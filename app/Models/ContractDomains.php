<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractDomains extends Model
{
    use HasFactory;
    protected $fillable = [
        'contract_id',
        'domain_id'
    ];
}
