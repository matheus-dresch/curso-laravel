<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];
    // protected $with = ['season']; Sempre chama esse attr junto

    public function seasons()
    {
        //  Classe que relaciona, nome dakey a ser criada *, nome da coluna referenciada
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $qb) {
            $qb->orderBy('name');
        });
    }
}
