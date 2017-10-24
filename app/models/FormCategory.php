<?php 
namespace App\Models;

use Eloquent;

class FormCategory extends Eloquent {

	protected $table = 'forms_category';

	public function forms()
    {
        return $this->hasMany('App\Models\Form', 'category_id')->orderBy('order');
    }

}