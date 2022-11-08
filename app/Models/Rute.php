<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $table = 'tb_rute';
    protected $primaryKey = 'id_rute';
    public $incrementing = true;
    protected $fillable = ['nama_rute', 'asal', 'tujuan'];
    public $timestamps = false;
}