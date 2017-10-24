<!DOCTYPE html>
<html>
  <head>
    <title>{{ $page->html_title_en }}</title>
    <meta name="keywords" content="{{ $page->meta_keywords }}">
    <meta name="description" content="{{ $page->meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-49694223-1']);
  _gaq.push(['_setDomainName', 'cis.hallselect.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  //(function() {
  //  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 //   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 // })();

</script>

    @include('site._partials.assets')

  </head>
  <body>

    @include('site._partials.header')


        @yield('main')
        
              
    @include('site._partials.footer')

  </body>

</html>
 
  