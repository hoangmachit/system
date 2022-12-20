<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\DomainInits;
use App\Models\Status;

class Domains extends Model
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
        'domain_name',
        'address',
        'domain_init_id',
        'note',
        'price',
        'price_special',
        'date_payment',
        'year',
        'status',
    ];
    public function domain_init()
    {
        return $this->hasOne(DomainInits::class, 'id', 'domain_init_id');
    }
}
