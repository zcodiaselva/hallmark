<?php 
namespace App\Models;

use Eloquent;

class FormCategory extends Eloquent {

	protected $table = 'forms_category';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}