<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $table = 'employee';
    
    protected $fillable = ['name','surname','email','phone','hiringDate','idworkstation','iddepartment',];

    protected $attribute = ['name'=>'sin especificar' , 'surname'=>'sin especificar' , 'email'=>'sin especificar'];
    
    public function workstation(){
        
        return $this->belongsTo('\App\Models\Workstation', 'idworkstation');
    }
    
    public function department(){
        
        return $this->belongsTo('\App\Models\Department', 'iddepartment');
    }
    
    public function departments(){
        
        return $this->hasMany('App\Models\Department','idemoployeemanager');
    }
}
