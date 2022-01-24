<?php

namespace App\Models;

use App\Models\tb_outlet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_paket extends Model
{
    use HasFactory;
    protected $table = 'tb_paket';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'id_outlet',
        'jenis',
        'nama_paket',
        'harga'
    ];
    public $timestamps = false;
    function outlet(){
        return $this->belongsTo(tb_outlet::class, 'id_outlet');
    }

}
