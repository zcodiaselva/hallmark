			<ul id="subnav" class="nav nav-list">

				<li {{ Request::is('cis-admin') ? 'class="active"' : '' }} >
					<a href="{{ URL::to('cis-admin') }}"><i class="icon-chevron-right"></i> Dashboard</a>
				</li>

				
				<li {{ Request::is('cis-admin/pages*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('cis-admin.pages.index') }}"><i class="icon-chevron-right"></i> Pages</a>
				</li>
                                
                                
				<li {{ Request::is('cis-admin/sliders*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('cis-admin.sliders.index') }}"><i class="icon-chevron-right"></i> Sliders</a>
				</li>

				<li {{ Request::is('cis-admin/menu*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('cis-admin.menu.index') }}"><i class="icon-chevron-right"></i> Menu</a>
				</li>
                      

				<li {{ Request::is('cis-admin/category*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('cis-admin.category.index') }}"><i class="icon-chevron-right"></i> Categories</a>
				</li>
                                
                                <li {{ Request::is('cis-admin/emails*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('cis-admin.emails.index') }}"><i class="icon-chevron-right"></i> Emails</a>
				</li>
                                  <li {{ Request::is('cis-admin/staffcategory*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('cis-admin.staffcategory.index') }}"><i class="icon-chevron-right"></i> Staff Categories</a>
				</li>
                                 <li {{ Request::is('cis-admin/staff*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('cis-admin.staff.index') }}"><i class="icon-chevron-right"></i> Staff</a>
				</li>
				  <li {{ Request::is('cis-admin/industry*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('cis-admin.industry.index') }}"><i class="icon-chevron-right"></i> Industry</a>
				</li>
			</ul>