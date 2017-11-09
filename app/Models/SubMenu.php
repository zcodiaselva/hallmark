<?php 
namespace App\Models;
namespace App\Models\Menu;

use Eloquent;

class SubMenu extends Eloquent {

    protected $table = 'menus';
    
    public function menu()
    {
        return $this->belongsTo('Menu', 'class');
    }

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
       	
}