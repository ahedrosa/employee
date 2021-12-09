<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workstation extends Model
{
    use HasFactory;
    
    protected $table = 'workstation';
    
    protected $fillable = ['name','lowestsalary','highestsalary',];

    protected $attribute = ['lowestsalary'=>0, 'highestsalary'=>0];
    
    public function employees(){
        
        return $this->hasMany('App\Models\Employee', 'idworkstation');
    }
    
}
