<?php 
namespace App\Models;

use Eloquent;

class Slider extends Eloquent {

	protected $table = 'sliders';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}