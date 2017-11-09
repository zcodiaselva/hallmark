<?php 
namespace App\Models;

use Eloquent;

class Category extends Eloquent {

    protected $table = 'category';
    
    public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }
    
    
}