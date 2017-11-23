

<ul id="top-menu" class="nav navbar-nav main-nav">
    @foreach($menu as $product)
	@if($product->order < 8 )
    @if($product->children->count() > 0 )  
     <li><a href="" {{ Request::is($product->slug_en) ? 'class="active dropdown-toggle"' : 'class="dropdown-toggle"' }}  data-toggle="dropdown">{{ $product->name_en }} <span class="fa fa-angle-right pull-right"></span></a>
                <ul class="dropdown-menu" role="menu">
                    @foreach($product->children as $submenu)
<<<<<<< HEAD
					<li><a href="{{ URL::to($product->slug_en)}}/{{$submenu->slug_en}}" {{ Request::is('/'. $product->slug_en) ? 'class="active"' : '' }}>{{$submenu->name_en}}</a></li>
                    @endforeach 						
=======
			<li><a href="{{$product->slug_en.'/'.$submenu->slug_en}}" {{ Request::is($product->slug_en.'/'. $product->slug_en) ? 'class="active"' : '' }}>{{$submenu->name_en}}</a></li>
                    @endforeach                           
>>>>>>> 2ea88fa102c5bd1bcd4d02f58f3a5ff414a1eec7
                </ul>
          </li>  
    @else
    <li><a href="{{ URL::to($product->slug_en)}}">{{ $product->name_en }}</a></li>
    @endif
	@endif
    @endforeach
</ul>