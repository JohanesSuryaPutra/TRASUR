<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'tb_kendaraan';
    protected $primaryKey = 'id_kendaraan';
    public $incrementing = true;
    protected $fillable = ['tipe_kendaraan', 'daya_angkut', 'harga', 'id_rute'];
    public $timestamps = false;

    public function datarute(){
        return $this->belongsTo(Rute::class, 'id_rute')->withDefault([
            'id_rute' => 'tidak ada',
        ]);
    }
}