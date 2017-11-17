 
 <ul id="top-menu" class="nav navbar-nav main-nav right">
	<li><a href="http://commercial.hallmarkgrp.com/Login.asp" target="_blank">Agent Login</a></li>
    @foreach($menu as $product)
    @if($product->order > 8 )  
		<li><a href="{{ URL::to($product->slug_en)}}">{{ $product->name_en }}</a></li>	
    @else
			
    @endif
    @endforeach	
</ul>