<?php

use App\Models\Slider;
use App\Models\Menu;
use App\Models\Industry;
use App\Models\Staff;
use App\Models\CisPage;
use App\Models\Email;
use App\Services\Validators\AgencyFormValidator;
use App\Services\Validators\ContactFormValidator;

class HomeController extends BaseController {

	public function __construct()
	{
           // $this->checkLanguage();

		$this->menu = Menu::where('site','cis')->where('parent_id','0')->where('category_id','!=','12')->with('page')
										->orderBy('order', 'asc')->get();
             
		foreach ($this->menu as $key => $menu_item) {
			$this->menu[$key]['children'] = Menu::where('parent_id',$menu_item->id)->with('page')
												->orderBy('order', 'asc')->get();
		}

		View::share('products', CisPage::where('category_id', 11)->get());
		
	}
        
      /*  public function __construct()
	{
		$this->checkLanguage();

		$this->menu = Menu::where('site','hpl')->where('parent_id','0')->where('category_id','!=','12')->with('page')
										->orderBy('order', 'asc')->get();

		foreach ($this->menu as $key => $menu_item) {
			$this->menu[$key]['children'] = Menu::where('parent_id',$menu_item->id)->with('page')
															->orderBy('order', 'asc')->get();
		}

		View::share('products', Page::where('category_id', 11)->get());
	}
*/

	public function getIndex()
	{
		return View::make('site.home.index')
			->with('sliders', Slider::where('site','cis')->orderBy('order', 'asc')->get())
                      // ->with('page', CisPage::find(16));
		->with('page', CisPage::find(14));
	}

	
	public function getProducts($slug = null)
	{
		return View::make('site.products.index')
			->with('page', CisPage::where('site', 'cis')->where('slug_en', $slug)->first());
	}

        public function getOurTeam()
	{
		return View::make('site.team.index')
                        ->with('staffmembers', Staff::where('site','cis')->get())
                        ->with('page', CisPage::find(12));
			

	}
        
        public function getIndustries()
	{
		return View::make('site.industries.index')
                        ->with('classes', Industry::where('site','cis')->orderBy('order', 'asc')->get())
			->with('page', CisPage::find(8));

	}

	public function getPressRoom()
	{
		return View::make('site.press.index')
			->with('page', CisPage::find(11));
	}
        
        public function getPolicyPayments()
	{
		return View::make('site.payments.index')
			->with('page', CisPage::find(10));
	}
        
         public function getContactUs()
	{
		return View::make('site.contact.index')
                        ->with('page', CisPage::find(15));
			//->with('page', CisPage::find(12));
	}
           
        public function postContactUs()
	{
            $validation = new ContactFormValidator;

            if ($validation->passes())
            {
                    $data = Input::all();

                    $email    = Email::find(12);
                    $emails[] = $email->email;

                    Mail::send('emails.contact', $data, function($message) use ($emails)
                    {
                        $message->to($emails)->subject('Contact Our Team');
                    });

                    Session::flash('email_message', 'Your message has been sent.');
                    
                    return View::make('site.contact.success')
			->with('page', CisPage::find(16));

                    //return Redirect::to('contact-us');
            }

            return Redirect::back()->withInput()->withErrors($validation->errors, 'contacts');
	}
        
        public function getNewAgency()
	{
		return View::make('site.agency.index')
			->with('page', CisPage::find(9));
	}
        
         public function getNewAgencySubmit()
	{
		
                  
            $validation = new AgencyFormValidator;

            if ($validation->passes())
            {
                    $data = Input::all();

                    $email    = Email::find(11);
                    $emails[] = $email->email; 

                    Mail::send('emails.agency', $data, function($message) use ($emails)
                    {
                        $message->to($emails)->subject('New Agency Appointment Request');
                    });

                    Session::flash('email_message', 'Your message has been sent.');

                    return Redirect::to('new-agency');
            }

            return Redirect::back()->withInput()->withErrors($validation->errors, 'agency');
        }
       
        
	public function getDownloadForm($id){
		//dd('uploads/es/form/' .$form->pdf);
		//dd(__DIR__ . '/../../../hallmark-select/public/uploads/es/form/'. $id);
		return Response::download(__DIR__ . '/../../../hallselect/uploads/aero/form/'. $id);
	}



}