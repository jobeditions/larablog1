<!DOCTYPE html>
<html>
<head>
	<title>@yield('pagetitle')</title>
	<meta name="language" content="French">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Ashok">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/app.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>

	<div class="headersection templete clear">
		<a href="/">
			<div class="logo">
				<img src="images/logo.png" alt="Logo"/>
				<h2>Website Title</h2>
				<p>Our website description</p>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
				<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
			</div>
			<div class="searchbtn clear">
			<form action="" method="post">
				<input type="text" name="keyword" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a id="active" href="/">Home</a></li>
		<li><a href="about">About</a></li>	
		<li><a href="contact">Contact</a></li>
	</ul>
</div>