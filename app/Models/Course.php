<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /* utilizando asignacion masiva con fillable se declaran aquellos campos que se desea permitir y con guarded los
    que no se desean permitir */

    
    /* protected $fillable = ['name', 'desc', 'category']; */ 

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
