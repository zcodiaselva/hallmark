<?php 
namespace App\Models;

use Eloquent;

class Industry extends Eloquent {

	protected $table = 'industry';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }
    
    

    

}