<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
protected $fillable =[
    'name',
    'age',
    'gender',
    'address',
    'id_person',
    'district',
    'city',
    'number_id',
    'province',
    'religion',
    'date_of_birth',
    'work',
    'monthly_salary',
    'cellphone_no',
    'work_location',
    'section_department',
    'condition_of_health',
    'benepisyaryo_ng_UCT',
    'benepisyaro_ng_4Ps',
    'Katutubo_(Grupo)',
    'Others'

];

}
