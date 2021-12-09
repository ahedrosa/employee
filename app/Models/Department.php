<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    
    protected $table = 'department';
    
    protected $fillable = ['name','location','idemployeemanager',];
    
    protected $attribute = ['location'=>'sin especificar',]  /* ?????? */;
    
    public function employees(){
        
        return $this->hasMany('App\Models\Employee','iddepartment');
        
    }
    
    public function employee(){
        
        return $this->belongsTo('App\Models\Employee','idemployeemanager');
    }
}
