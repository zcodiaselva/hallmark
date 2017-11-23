<?php 
namespace App\Models;

use Eloquent;

class Staff extends Eloquent {

	protected $table = 'staff';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Models\StaffCategory', 'staffcategory');
    }

}