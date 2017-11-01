<?php 
namespace App\Models;

use Eloquent;

class Producer extends Eloquent {

	protected $table = 'users';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}