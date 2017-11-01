<?php 
namespace App\Models;

use Eloquent;

class Menu extends Eloquent {

	protected $table = 'menues';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

    public function page()
    {
    	return $this->belongsTo('App\Models\Page', 'page_id');
    }
    
    public function parent()
    {
        return $this->belongsTo('App\Models\Menu','parent_id');
    }
    
    public function children()
    {
        return $this->hasMany('App\Models\Menu','parent_id')->orderBy('order');
    }
			
}