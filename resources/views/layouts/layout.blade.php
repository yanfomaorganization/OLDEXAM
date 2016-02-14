<!DOCTYPE html>
<html>
<head>
<title>Anciens sujets de l'UFR SVT et SEA - @yield('title')</title>
<meta name="viewport" content="width=320px, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
<link rel="stylesheet" href="{{{ asset('/css/jquery.countdown.css') }}}" />
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{{ asset('/css/jquery.modal1.css') }}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{{ asset('/css/github.css') }}}" type="text/css" media="screen" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,700' rel='stylesheet" type='text/css'>
<link href="{{{ asset('/css/flexslider.css') }}}" rel='stylesheet' type='text/css' />
</head>
<body>
  @include('layouts.header')

	@yield('box')

  @include('layouts.footer')

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="application/x-javascript">
  addEventListener("load", function(){
    setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){
      window.scrollTo(0,1);
    }
</script>

<script src="{{{ asset('/js/jquery.modal.js') }}}" type="text/javascript" charset="utf-8"></script>
<script src="{{{ asset('/js/highlight.pack.js') }}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  hljs.initHighlightingOnLoad();
</script>

<script>
  $(document).ready(function(){
      $(".dropdown").hover(
          function() {
              $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
              $(this).toggleClass('open');
          },
          function() {
              $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
              $(this).toggleClass('open');
          }
      );
  });
</script>
<script defer src="{{{ asset('/js/jquery.flexslider.js') }}}"></script>
<script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
</html>
