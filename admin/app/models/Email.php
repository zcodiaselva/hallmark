<?php 
namespace App\Models;

use Eloquent;

class Email extends Eloquent {

	protected $table = 'emails';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}