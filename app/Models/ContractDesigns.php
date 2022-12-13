<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractDesigns extends Model
{
    use HasFactory;
    protected $fillable = [
        'contract_id',
        'design_id'
    ];
    public function designs()
    {
        return $this->hasOne(Designs::class, 'id', 'design_id');
    }
}
