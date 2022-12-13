<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractHostings extends Model
{
    use HasFactory;
    protected $fillable = [
        'contract_id',
        'hosting_id'
    ];
    public function hostings()
    {
        return $this->hasOne(Hostings::class, 'id', 'hosting_id');
    }
}
