<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    use HasFactory;
    protected $table = 'tb_agen';
    protected $primaryKey = 'id_agen';
    public $incrementing = true;
    protected $fillable = ['nama', 'no_telp', 'alamat'];
    public $timestamps = false;
}