<?php

/*namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
}*/

// diubah yang di atas
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $fillable = ['id', 'kode', 'nama', 'tmp_lahir', 'tgl_lahir', 'gender', 'email', 'alamat', 'kelurahan_id'];
}

