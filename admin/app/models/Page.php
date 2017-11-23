<?php 
namespace App\Models;

class Page extends \Eloquent {

	protected $table = 'pages';

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