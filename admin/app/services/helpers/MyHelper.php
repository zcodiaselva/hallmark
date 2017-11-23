<?php namespace App\Services\Helpers;
use URL, Form;

class MyHelper{

	public static function btnEdit($route, $id)
	{
		return '<a href="'.URL::route($route, $id).'" 
					class="btn btn-primary btn-mini pull-left" title="Edit">
					<li class="icon-edit"></li>
				</a>';
	}

	public static function btnDelete($route, $id)
	{
		return ''.
			Form::open(array('route' => array($route, $id), 'method' => 'delete', 'data-confirm' => 'You are about to delete a record. This cannot be undone. Are you Sure?')) 
								
				.'<button style="margin-left:2px" type="submit" href="'.URL::route($route, $id) .'" class="btn btn-danger btn-mini pull-left" title="Delete"><li class="icon-trash"></li></button>'.
			 Form::close() . '';
	}

	public static function btnApprove($route, $id)
	{
		return ''.
			Form::open(array('route' => array($route, $id), 'method' => 'delete', 'data-confirm' => 'You are about to publish new changes. Are you Sure?')) 
								
				.'<button type="submit" href="'.URL::route($route, $id) .'" class="green approve">Approve</button>'.
			 Form::close() . '';
	}

	public static function btnDelete2($route, $sid, $cid)
	{
		return ''.
			Form::open(array('route' => array($route, $sid, $cid), 'method' => 'delete', 'data-confirm' => 'You are about to delete a record. This cannot be undone. Are you Sure?')) 
								
				.'<button style="margin-left:2px" type="submit" href="'.URL::route($route, array($sid, $cid)) .'" class="btn btn-danger btn-mini pull-left" title="Delete"><li class="icon-trash"></li></button>'.
			 Form::close() . '';
	}

	public static function btnDelete3($route, $sid, $cid, $id)
	{
		return ''.
			Form::open(array('route' => array($route, $sid, $cid, $id), 'method' => 'delete', 'data-confirm' => 'You are about to delete a record. This cannot be undone. Are you Sure?')) 
								
				.'<button style="margin-left:2px" type="submit" href="'.URL::route($route, array($sid, $cid, $id)) .'" class="btn btn-danger btn-mini pull-left" title="Delete"><li class="icon-trash"></li></button>'.
			 Form::close() . '';
	}

	public static function btnDeleteD2($route, $pid, $id)
	{
		return ''.
			Form::open(array('route' => array($route, $pid, $id), 'method' => 'delete', 'data-confirm' => 'You are about to delete a record. This cannot be undone. Are you Sure?')) 
								
				.'<button style="margin-left:2px;border:none; float:left;" type="submit" href="'.URL::route($route, array($pid, $id)) .'" class="btn s" title="Delete">D</button>'.
			 Form::close() . '';
	}

	public static function btnView($route, $id, $name)
	{
		return '<a style="margin-right:2px" href="'.URL::route($route, $id).'" 
					class="btn btn-info btn-mini pull-left" title="'.$name.'">
					'.$name.'
				</a>';
	}

	public static function format_date($date)
	{
		return date('d.m.Y - h:i A', strtotime($date));
	}

	public static function format_date2($date)
	{
		return date('d.m.y', strtotime($date));
	}

}