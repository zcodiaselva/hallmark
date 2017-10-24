<?php 
namespace App\Models;

class CisPageMeta extends \Eloquent {

	protected $table = 'cis_page_meta';
    protected $fillable = ['page_id', 'status'];

    public $timestamps = false;

}