<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makearent extends Model
{
    use HasFactory;
    protected $table = 'Makearent';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rent',
        'brand',
        'model',
        'year',
        'fuel',
        'transmission',
        'kmsdriven',
        'ownernum',
        'district',
        'city',
        'title',
        'discription',
        'rentday',
        'rentmonth',
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'photo6',
        'photo7',
        'photo8',
        'ownername',
        'ownerphone',

    ];

    // Define any relationships or additional methods here.
}
