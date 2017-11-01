			<ul id="subnav" class="nav nav-list">

				<li {{ Request::is('admin') ? 'class="active"' : '' }} >
					<a href="{{ URL::to('admin') }}"><i class="icon-chevron-right"></i> Dashboard</a>
				</li>

				<li {{ Request::is('admin/pages*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('admin.pages.index') }}"><i class="icon-chevron-right"></i> Pages</a>
				</li>

				<li {{ Request::is('admin/sliders*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('admin.sliders.index') }}"><i class="icon-chevron-right"></i> Slider</a>
				</li>

				<li {{ Request::is('admin/emails*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('admin.emails.index') }}"><i class="icon-chevron-right"></i> Emails</a>
				</li>

				<li {{ Request::is('admin/admins*') ? 'class="active"' : '' }} >
					<a href="{{ URL::route('admin.admins.index') }}"><i class="icon-chevron-right"></i> Users</a>
				</li>

			</ul>