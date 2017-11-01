<?php namespace App\Models;

class AdminUser extends \Eloquent {

	protected $table = 'admins';

	public function creator()
    {
        return $this->belongsTo('Admin', 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo('Admin', 'updated_by');
    }

}