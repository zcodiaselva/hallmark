<?php 
namespace App\Models;

use Eloquent;

class Link extends Eloquent {

	protected $table = 'links';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}