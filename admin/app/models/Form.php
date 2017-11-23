<?php 
namespace App\Models;

use Eloquent;

class Form extends Eloquent {

	protected $table = 'forms';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}