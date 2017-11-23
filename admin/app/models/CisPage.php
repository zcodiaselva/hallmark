<?php 
namespace App\Models;

class CisPage extends \Eloquent {

	protected $table = 'cis_pages';

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
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

}