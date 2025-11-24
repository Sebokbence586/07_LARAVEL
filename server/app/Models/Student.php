<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'diak_nev', 'schoolclass_id', 'neme', 'iranyitoszam', 
        'lak_helyseg', 'lak_cim', 'szulesi_hely', 'szulesi_datum', 
        'igazolvany_szam', 'atlag', 'osztondij'
    ];

    public function schoolclass()
    {
        return $this->belongsTo(Schoolclass::class);
    }

    public function sports()
    {
        return $this->belongsToMany(Sport::class, 'playingsports');
    }
}
