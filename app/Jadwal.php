<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    
    protected $fillable = ['nip_supervisor', 'tanggal', 'waktu', 'sampai'];

    public function user()
    {
        return $this->belongsTo('App\User', 'nip_supervisor');
    }
}
