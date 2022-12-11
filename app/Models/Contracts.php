<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Domains;
use App\Models\Hostings;
use App\Models\CustomerContracts;
use App\Models\ContractPrices;

class Contracts extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'signing_date',
        'date_of_delivery',
        'payment_1st',
        'payment_2st',
        'date_payment_1st',
        'date_payment_2st',
        'note',
        'status',
        'domain_id',
        'hosting_id',
    ];
    public function domain()
    {
        return $this->hasOne(Domains::class,'id','domain_id');
    }
    public function hosting()
    {
        return $this->hasOne(Hostings::class,'id','hosting_id');
    }
    public function customer_contracts()
    {
        return $this->hasOne(CustomerContracts::class,'contract_id','id');
    }
    public function contract_price()
    {
        return $this->hasOne(ContractPrices::class,'contract_id','id');
    }
}
