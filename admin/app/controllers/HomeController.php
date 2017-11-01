<?php

use App\Models\Slider;
use App\Models\Page;
use App\Models\Email;
use App\Services\Validators\ContactFormValidator;

class HomeController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function getIndex()
	{
		return View::make('site.home.index')
			->with('sliders', Slider::where('site','main')->orderBy('order', 'asc')->get())
			->with('page', Page::find(1));
	}

	public function getSelectProfile()
	{
		return View::make('site.corporate.index')
			->with('page', Page::find(2));
	}

	public function getPressRoom()
	{
		return View::make('site.press.index')
			->with('page', Page::find(3));
	}

	public function getContactUs()
	{
		return View::make('site.contact.index')
			->with('page', Page::find(4));
	}

	public function postContactUs()
	{

		$validation = new ContactFormValidator;

		if ($validation->passes())
		{
			$data = Input::all();

			$data['hallmark1'] = Input::get('hallmark1', '');
			$data['hallmark2'] = Input::get('hallmark2', '');
			$data['hallmark3'] = Input::get('hallmark3', '');
			$data['hallmark4'] = Input::get('hallmark4', '');
			$data['hallmark5'] = Input::get('hallmark5', '');

			if(Input::has('hallmark1') or Input::has('hallmark2') or Input::has('hallmark3') or Input::has('hallmark4') or Input::has('hallmark5'))
			{
				if(Input::has('hallmark1'))
				{
					$h1 = Email::find(1);
					$emails[] = $h1->email;
				}

				if(Input::has('hallmark2'))
				{
					$h2 = Email::find(5);
					$emails[] = $h2->email;
				}

				if(Input::has('hallmark3'))
				{
					$h3 = Email::find(6);
					$emails[] = $h3->email;
				}

				if(Input::has('hallmark4'))
				{
					$h4 = Email::find(7);
					$emails[] = $h4->email;
				}

				if(Input::has('hallmark5'))
				{
					$h5 = Email::find(8);
					$emails[] = $h5->email;
				}
			}
			else
			{
				$h1 = Email::find(1);
				$emails[] = $h1->email;
			}

			Mail::send('emails.contact', $data, function($message) use ($emails)
			{
			    $message->to($emails)->subject('Request more information');

			});
			

			Session::flash('message', 'Your message has been sent.');

			return Redirect::to('contact-us');
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	
	public function getCsv(){
		
		$csv = file_get_contents('uploads/csv.csv');
		$lines = explode("\n", $csv);
		$head = str_getcsv(array_shift($lines));

		$array = array();
		foreach ($lines as $line) {
		    $row = array_pad(str_getcsv($line), count($head), '');
		    $array[] = array_combine($head, $row);
		}

		$str ='';

		foreach($array as $record){
			$str .= $record['UserID'].' '.$record['Name'].' '.$record['Password'].'<br>';

			$user = Sentry::getUserProvider()->create(array(
		        'first_name'    => $record['Name'],
		        'username'    => $record['UserID'],
		        'password'    => $record['Password'],
		        'activated'    => 1,
		        'site'    => 'aero',
		        'created_by'    => 1,
		        'updated_by'    => 1,
		        'updated_at'    => date('Y-m-d H:i:s'),
		        'updated_at'    => date('Y-m-d H:i:s')
		    ));
		}

		return $str;
		
	}

	

}