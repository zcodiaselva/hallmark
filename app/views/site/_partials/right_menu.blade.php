 
 <ul id="top-menu" class="nav navbar-nav main-nav right">
    @foreach($menu as $product)
    @if($product->order > 8 )  
		<li><a href="{{ URL::to($product->slug_en)}}">{{ $product->name_en }}</a></li>
    @else
		
    @endif
    @endforeach
</ul>