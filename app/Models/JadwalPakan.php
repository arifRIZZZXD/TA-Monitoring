<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPakan extends Model
{
    use HasFactory;
    protected $table = 'jadwal_pakans';
    protected $primaryKey = 'id';
    protected $fillable =  ['hours1',
                            'minutes1',
                            'hours2',
                            'minutes2',
                            'hours3',
                            'minutes3',];
}
