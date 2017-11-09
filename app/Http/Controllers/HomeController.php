<?php namespace App\Http\Controllers;

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
        //$this->checkLanguage();                           
	}
             
	public function index()
	{
		$this->menu = Menu::where('site','cis')->where('parent_id','0')->where('category_id','!=','0')->with('page')
										->orderBy('order', 'asc')->get();
             
		foreach ($this->menu as $key => $menu_item) {
			$this->menu[$key]['children'] = Menu::where('parent_id',$menu_item->id)->with('page')
												->orderBy('order', 'asc')->get();
		}
		
		return view('site.home.index')
			->with('sliders', Slider::where('site','cis')->orderBy('order', 'asc')->get())
			->with('page', CisPage::find(14))
			->with('menu',Menu::with('children')->where('parent_id','=',0)
			->with('page')->orderBy('order', 'asc')->get());
	}

	public function showMainMenu($slug)
        {
            //$artist = Page::find($artist_id);
            
            //$page = CisPage::where('site', 'cis')->find('id', $slug)->first();
            $idval = Menu::where('slug_en',$slug)->first()->page_id;            
            $id = intval($idval);
            
            print $slug;
            
            if($slug == 'industries')
            {
                return view('site.industries.index')
                ->with('page',CisPage::find($id))
                ->with('menu',Menu::with('children')->where('parent_id','=',0)
		->with('page')->orderBy('order', 'asc')->get())
                ->with('classes', Industry::where('site','cis')->orderBy('order', 'asc')->get());
            }            
            elseif ($slug == 'our-team')
            {
                return view('site.team.index')
                ->with('page',CisPage::find($id))
                ->with('menu',Menu::with('children')->where('parent_id','=',0)
		->with('page')->orderBy('order', 'asc')->get())
                ->with('classes', Staff::where('site','cis')->get());
            }
            elseif ($slug == 'new-agency')
            {
                return view('site.agency.index')
                ->with('page',CisPage::find($id))
                ->with('menu',Menu::with('children')->where('parent_id','=',0)
		->with('page')->orderBy('order', 'asc')->get());                
            }
            elseif ($slug == 'policy-payments')
            {
                return view('site.default.index')
                ->with('page',CisPage::find($id))
                ->with('menu',Menu::with('children')->where('parent_id','=',0)
		->with('page')->orderBy('order', 'asc')->get())
                ->with('classes', Staff::where('site','cis')->get());
            } 
            elseif ($slug == 'press-room')
            {
                return view('site.press.index')
                ->with('page',CisPage::find($id))
                ->with('menu',Menu::with('children')->where('parent_id','=',0)
		->with('page')->orderBy('order', 'asc')->get());
                //->with('classes', Staff::where('site','cis')->get());
            }
            elseif($slug == 'contact-us')
            {
                return view('site.contact.index')
                ->with('page', CisPage::find($id))
                ->with('menu',Menu::with('children')->where('parent_id','=',0)
		->with('page')->orderBy('order', 'asc')->get());
            }
            else
            {              
                return view('site.default.index')
                ->with('page',CisPage::find($id))
                ->with('menu',Menu::with('children')->where('parent_id','=',0)
		->with('page')->orderBy('order', 'asc')->get());
                //->with('classes', Industry::where('site','cis')->orderBy('order', 'asc')->get())
                //->with('staffmembers', Staff::where('site','cis')->get());
            }

            //return view('site.default.index'), ['slug_en' => $slug]);
        }
        
        public function showSubMenu($slug_en,$slug)
        {   
            //print $slug_en.'/'. $slug;
                                  
            $slugsub = Menu::where('slug_en',$slug)->first()->page_id;             
            print $slugsub;            
            $id = intval($slugsub);
                                    
            if($id === null)
            {
                //
            }
            else
            {              
                return view('site.default.index')
                ->with('page',CisPage::find($id))
                ->with('menu',Menu::with('children')->where('parent_id','=',0)
		->with('page')->orderBy('order', 'asc')->get())
                ->with('classes', Industry::where('site','cis')->orderBy('order', 'asc')->get());
                //->with('classes', Industry::where('site','cis')->orderBy('order', 'asc')->get());
                //->with('staffmembers', Staff::where('site','cis')->get());
            }           
        }
        
	public function getProducts($slug = null)
	{
		return view('site.products.index')
			->with('page', CisPage::where('site', 'cis')->where('slug_en', $slug)->first());
	}
                            
        public function getPolicyPayments()
	{
		return view('site.payments.index')
				->with('page', CisPage::find(10));
	}
        
         public function getContactUs()
	{
		return view('site.contact.index')
                ->with('page', CisPage::find(15));			
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
            }

            return Redirect::back()->withInput()->withErrors($validation->errors, 'contacts');
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