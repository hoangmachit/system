<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractCancels extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'contract_id',
        'cancel_id',
        'note',
    ];
    public function cancels()
    {
        return $this->hasOne(Cancels::class, 'id', 'cancel_id');
    }
}
