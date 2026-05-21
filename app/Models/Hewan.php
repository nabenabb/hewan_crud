<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    //menentuan nama tabel secara eksplisit
    protected $table = 'hewan';
    //menentukan atribut yang dapat diisi secara massal (mass assignment)
    // Kolom 'nama_lengkap', 'jabatan', dan 'gaji' bisa diisi langsung menggunakan metode create() atau update()
     protected $fillable = ['hewan', 'jenis_hewan', 'umur', 'keadaan'];
}
