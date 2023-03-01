<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    use HasFactory;

    protected $fillable = ['image','merk','harga'];
    protected $guarded = ['id'];
    protected $table = 'sepedas';

    public function scopeFilter($query, array $filters)
    {   
            if (isset($filters['search'])) {
                $query->where('merk', 'like', '%' . $filters['search'] . '%');
            }

            if(isset($filters['aksesoris'])) {     
                    $query->where('nama', 'like', '%' . $filters['aksesoris'] . '%');
            }
    }

}
