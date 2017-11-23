<?php 
namespace App\Models;

use Eloquent;

class StaffCategory extends Eloquent {

	protected $table = 'staff_category';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}