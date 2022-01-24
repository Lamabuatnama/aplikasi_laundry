<?php

namespace App\Models;
use App\Models\tb_paket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tb_outlet extends Model
{
    use HasFactory;
    protected $table = 'tb_outlet';
    protected $primaryKey   = 'id';
    protected $fillable = [
        'nama',
        'alamat',
        'tlp'
    ];
    public $timestamps = false;

    public function paket(){
        return $this->hasMany(tb_paket::class);
    }

}
