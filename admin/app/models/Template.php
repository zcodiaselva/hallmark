<?php 
namespace App\Models;

use Eloquent;

class Template extends Eloquent {

	protected $table = 'templates';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}
