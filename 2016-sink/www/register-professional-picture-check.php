<?php 
require('/php/common.php');
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="google" value="notranslate">


    <title>CodePen - Contact Form Template</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="http://dev.see8ch.com/see8ch/v3/fonts/ss-social/ss-social.css" rel="stylesheet" />

<link href="http://dev.see8ch.com/see8ch/v3/fonts/ss-standard/ss-standard.css" rel="stylesheet" />

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">



<link href="/css/login.css" rel="stylesheet" />
    
    

    <script>
  window.console = window.console || function(t) {};
</script>

        <script src="//assets.codepen.io/assets/libs/prefixfree.min-d258f6cb24f3a877e4fb83b348ec8a3f.js"></script>

    
  </head>

  <body>

<section id="hire">
    <img src="/images/back.png" onclick="goBack()" />
	<h1> Review Your Account </h1>
	<br>
	<img src="<?php echo htmlentities($_SESSION['user']['picture'], ENT_QUOTES, 'UTF-8'); ?>" alt="Profile" style="width:300px;">
	<br>
	<form action="index.php" id="proDetails">
	<h2><?php echo htmlentities($_SESSION['user']['fName'], ENT_QUOTES, 'UTF-8'); ?> <?php echo htmlentities($_SESSION['user']['lName'], ENT_QUOTES, 'UTF-8'); ?> </h2>
	<h2><?php echo htmlentities($_SESSION['user']['age'], ENT_QUOTES, 'UTF-8'); ?> years old  </h2> 
	<h2>Facebook: <br> <?php echo htmlentities($_SESSION['user']['facebook'], ENT_QUOTES, 'UTF-8'); ?>  </h2> 
	<h2>About: <br> </h2>  <h3> <?php echo htmlentities($_SESSION['user']['about'], ENT_QUOTES, 'UTF-8'); ?> <h3>
		<br>
	      <input class="button" type="submit" value="Send" onclick="home();" />
  </form>
</section>
      <script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-f961f59a28ef4fd551736b43f94620b5.js"></script>

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script>     
	  $('textarea').blur(function () {
    $('#hire textarea').each(function () {
        $this = $(this);
        if (this.value != '') {
            $this.addClass('focused');
            $('textarea + label + span').css({ 'opacity': 1 });
        } else {
            $this.removeClass('focused');
            $('textarea + label + span').css({ 'opacity': 0 });
        }
    });
});
$('#hire .field:first-child input').blur(function () {
    $('#hire .field:first-child input').each(function () {
        $this = $(this);
        if (this.value != '') {
            $this.addClass('focused');
            $('.field:first-child input + label + span').css({ 'opacity': 1 });
        } else {
            $this.removeClass('focused');
            $('.field:first-child input + label + span').css({ 'opacity': 0 });
        }
    });
});
$('#hire .field:nth-child(2) input').blur(function () {
    $('#hire .field:nth-child(2) input').each(function () {
        $this = $(this);
        if (this.value != '') {
            $this.addClass('focused');
            $('.field:nth-child(2) input + label + span').css({ 'opacity': 1 });
        } else {
            $this.removeClass('focused');
            $('.field:nth-child(2) input + label + span').css({ 'opacity': 0 });
        }
    });
});
      //@ sourceURL=pen.js
    </script>

    
    <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

<script type="text/javascript">
$(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    $sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
  });

  // Next button goes forward iff current block validates
  $('.form-navigation .next').click(function() {
    if ($('.demo-form').parsley().validate({group: 'block-' + curIndex()}))
      navigateTo(curIndex() + 1);
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});
</script>
    
  </body>
</html>