<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designs extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'url',
        'note',
        'date_start',
        'date_finish',
        'font_family',
        'url_example',
        'status',
        'photo',
        'code',
    ];
    public function full_name(){
        return $this->first_name." ".$this->last_name;
    }
}
