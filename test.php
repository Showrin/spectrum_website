<!DOCTYPE html>
<html>
<head>

	<title>Spectrum (Professional Skill Development Club of KUET)</title>

	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


    

	<link rel="shortcut icon" type="images/x-icon" href="images/favicon/Spectrum Logo.png">

	<style>
		.image-cropper {
    width: 50px;
    height: 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    border-radius: 50%;

img {
    margin: 0 -45%;
    width: auto;
    height: inherit;
}
}
	</style>
	
</head>
<body>
<section class="center slider">
<div class="slick-div">
			<div class="card topic-card">
				<div class="card-image">
					<img src="images/mark.jpg">
					<span class="card-title thumbs-up-panel"><i class="thumbs up icon"></i> 6 K </span>
					<span class="card-title topic-title">Mark Zuckerberg: The Ultimate Changer

					<span class="image-cropper">
    					<img src="images/mark.jpg" class="rounded" />
					</span>
				</span>
				</div>
				
			</div>
		</div>
</section>





	
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>

	<script src="js/extras/slick.js" type="text/javascript" charset="utf-8" async defer></script>

<script type="text/javascript">
    $(document).ready(function() {
      
      $('.slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        centerMode: true,
        autoplay: true,
		autoplaySpeed: 2000,
		focusOnSelect: true,
		swipeToSlide: true,
		variableWidth: true,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });
    });
</script>


	<script type="text/javascript">
	$('.ui.basic.modal')
  .modal('show');
</script>

</body>
</html>