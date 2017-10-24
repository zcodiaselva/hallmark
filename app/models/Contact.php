<?php 
namespace App\Models;

use Eloquent;

class Contact extends Eloquent {

	protected $table = 'contacts';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}