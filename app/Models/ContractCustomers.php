<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContractCustomers extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'contract_id',
        'customer_id',
        'last_name',
        'first_name',
        'address',
        'birth_day',
        'identity_card',
        'company_name',
        'company_address',
        'company_tax_code',
        'email',
        'phone',
        'zalo',
        'fax',
        'note',
        'status'
    ];
    public function customers()
    {
        return $this->hasOne(Customers::class, 'id', 'customer_id');
    }
}
