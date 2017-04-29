<!DOCTYPE html>
<html>
  <head>
    <title>Blog page design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" media='screen and (min-width: 100px)' href="style.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200" rel="stylesheet">
    <link rel="stylesheet" media='screen and (max-width: 100px)' href="stylemobile.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="jquery-3.1.1.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
  integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
  crossorigin="anonymous"></script>
	<script src="js/mobileGUI.js"></script>
  </head>
  <body>

	<header>
        <div id='header-logo-wrapper'>
            <!--<div id='header-logo-inner-text'>Krzysztof Widacki</div>-->
            <img src="icons/logo.png" id="header-logo-inner-image"/>
        </div>


		<ul id="header-navigation">
            <li><a href="#o-mnie">O mnie</a></li>
            <li><a href="#oferta">Oferta</a></li>
            <li><a href="#cennik">Cennik</a></li>
		</ul>
	</header>

	<div class="stackElement logoPadding whiteText" >
		<div class="bgParallax" style="background-image: url('https://previews.123rf.com/images/stockbroker/stockbroker1507/stockbroker150703732/42252883-Group-Of-Business-People-Listening-To-Colleague-Addressing-Office-Meeting-Stock-Photo.jpg');">
		</div>
		<div class="containerTitle">
			<h1 id="title">Twoja Firma</h1>
			<br>
			<p id="title-description">Ponad 20 klientów zadowolonych z moich usług
			</p>
		</div>
	</div>

	<div class="stackElement smallPadding bgGrey1">
		<div class="containerTitle">
			<div class="column-parent">
				<div class="column-element">
					<img src="icons/dollar.png" class="icon"/>
					<h3>Tanio</h3><hr>
					Nasza firma zapewnia najtańsze usługi itp itd
				</div>
				<div class="column-element">
					<img src="icons/fast.png" class="icon"/>
					<h3>Szybko</h3><hr>
					Wszystko co robimy mieści się w ramach czasowych które wyznaczymy. Nigdy nie opóźniamy.

				</div>
				<div class="column-element">
					<img src="icons/like.png" class="icon"/>
					<h3>Dobrze</h3><hr>
					Dzięki mojemu dużemu doświadczeniu z daną usługą wykonuje ją solidnie.
				</div>
				<div class="column-element">
					<img src="icons/time.png" class="icon"/>
					<h3>Punktualność</h3><hr>
					Nigdy nie spóźniam się.
				</div>
			</div>
		</div>
	</div>

	<div class="stackElement titlePadding" id="o-mnie">
		<div class="bgParallax" style="background-image: url('http://s.hswstatic.com/gif/future-9.jpg');">
		</div>
		<div class="containerTitle whiteText">

			<h2>Kim jestem?</h2>
		</div>
	</div>

	<div class="stackElement smallPadding bgGrey1" >
		<div class="containerContent">
			<div class="column-parent">
				<div class="column-element two">

					<h3>O mnie</h3><hr>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec ex non urna posuere tempus ut eu nunc. Donec at ligula mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec mollis pulvinar convallis. Etiam rhoncus pulvinar felis, sed convallis nisl. Nam laoreet porttitor augue, vitae interdum sem tincidunt id. Phasellus ornare pulvinar elit, nec porta ante ultricies ut. Nullam at tristique purus. In eget ultricies arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur a quam sed ante mollis imperdiet id et velit. Nulla feugiat laoreet lectus, rhoncus mattis neque congue quis. Donec eget purus vel felis fringilla feugiat at eu metus. Aliquam lacinia libero id odio rutrum feugiat.

				</div>
				<div class="column-element two">
					<img src="http://l7.alamy.com/zooms/1659aa7d35334fcc8c272d69be1f309b/private-secretary-to-britains-prince-charles-speaks-to-media-following-h0yx69.jpg" class="mainImage">
				</div>
			</div>

		</div>
	</div>

	<div class="stackElement titlePadding" id="oferta">
		<div class="bgParallax" style="background-image: url('https://static.pexels.com/photos/10651/photo-1432821596592-e2c18b78144f.jpeg');">
		</div>
		<div class="containerTitle whiteText">
			<h2>Co oferuje?</h2>
		</div>
	</div>

	<div class="stackElement smallPadding">
		<div class="containerContent">
			<div class="column-parent two centeredFlexbox">
				<div class="column-element two">

					<h3>Tworzenie niezawodnego kodu</h3><hr>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec ex non urna posuere tempus ut eu nunc. Donec at ligula mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec mollis pulvinar convallis. Etiam rhoncus pulvinar felis, sed convallis nisl. Nam laoreet porttitor augue, vitae interdum sem tincidunt id. Phasellus ornare pulvinar elit, nec porta ante ultricies ut. Nullam at tristique purus. In eget ultricies arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur a quam sed ante mollis imperdiet id et velit. Nulla feugiat laoreet lectus, rhoncus mattis neque congue quis. Donec eget purus vel felis fringilla feugiat at eu metus. Aliquam lacinia libero id odio rutrum feugiat.

				</div>
				<div class="column-element two">
					<img src="https://i.ytimg.com/vi/1M0YXFW31hg/maxresdefault.jpg" class="mainImage">
				</div>
			</div>
			<div class="column-parent two centeredFlexbox">
				<div class="column-element two">
					<img src="https://www.webworksofkc.com/wp-content/uploads/code1-684x350c.jpg" class="mainImage">
				</div>
				<div class="column-element two">
					<h3>Łatwość obsługi kodu</h3>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec ex non urna posuere tempus ut eu nunc. Donec at ligula mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec mollis pulvinar convallis. Etiam rhoncus pulvinar felis, sed convallis nisl. Nam laoreet porttitor augue, vitae interdum sem tincidunt id. Phasellus ornare pulvinar elit, nec porta ante ultricies ut. Nullam at tristique purus. In eget ultricies arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur a quam sed ante mollis imperdiet id et velit. Nulla feugiat laoreet lectus, rhoncus mattis neque congue quis. Donec eget purus vel felis fringilla feugiat at eu metus. Aliquam lacinia libero id odio rutrum feugiat.

				</div>
			</div>

		</div>
	</div>

	<div class="stackElement titlePadding" id="cennik">
		<div class="bgParallax" style="background-image: url('https://static.pexels.com/photos/10651/photo-1432821596592-e2c18b78144f.jpeg');">
		</div>
		<div class="containerTitle whiteText">
			<h2>Cennik</h2> (Który pomysł lepszy?)
		</div>

	</div>


	<div class="stackElement titlePadding">
		<div class="containerContent">
			<div class="column-parent">
				<div class="column-element card">

					<h3>Analiza psyhiczna</h3><hr>
					<p class="price">30€/h</p><hr>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="column-element card">

					<h3>Graphics in progress!</h3><hr>
					<p class="price">26€/h</p><hr>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="column-element card">

					<h3>Robienie za medium</h3><hr>
					<p class="price">20€/h</p><hr>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
				<div class="column-element card">

					<h3>Coś</h3><hr>
					<p class="price">55€/h</p><hr>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</div>
			</div>


		</div>
	</div>
	<!--
	<div class="stackElement titlePadding">
		<div class="bgParallax" style="background-image: url('https://static.pexels.com/photos/10651/photo-1432821596592-e2c18b78144f.jpeg');">
		</div>
		<div class="containerTitle whiteText">
			<h2>Klienci</h2>
		</div>
	</div>

	<div class="stackElement smallPadding">
		<div class="containerContent">
			<div class="column-parent">
				<div class="column-element two">

					<h3>Tworzenie niezawodnego kodu</h3><hr>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec ex non urna posuere tempus ut eu nunc. Donec at ligula mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec mollis pulvinar convallis. Etiam rhoncus pulvinar felis, sed convallis nisl. Nam laoreet porttitor augue, vitae interdum sem tincidunt id. Phasellus ornare pulvinar elit, nec porta ante ultricies ut. Nullam at tristique purus. In eget ultricies arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur a quam sed ante mollis imperdiet id et velit. Nulla feugiat laoreet lectus, rhoncus mattis neque congue quis. Donec eget purus vel felis fringilla feugiat at eu metus. Aliquam lacinia libero id odio rutrum feugiat.

				</div>
				<div class="column-element two">
					<img src="https://i.ytimg.com/vi/1M0YXFW31hg/maxresdefault.jpg" class="mainImage">
				</div>
			</div>
			<div class="column-parent">
				<div class="column-element two">
					<img src="https://www.webworksofkc.com/wp-content/uploads/code1-684x350c.jpg" class="mainImage">
				</div>
				<div class="column-element two">
					<h3>Łatwość obsługi kodu</h3>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec ex non urna posuere tempus ut eu nunc. Donec at ligula mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec mollis pulvinar convallis. Etiam rhoncus pulvinar felis, sed convallis nisl. Nam laoreet porttitor augue, vitae interdum sem tincidunt id. Phasellus ornare pulvinar elit, nec porta ante ultricies ut. Nullam at tristique purus. In eget ultricies arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur a quam sed ante mollis imperdiet id et velit. Nulla feugiat laoreet lectus, rhoncus mattis neque congue quis. Donec eget purus vel felis fringilla feugiat at eu metus. Aliquam lacinia libero id odio rutrum feugiat.

				</div>
			</div>

		</div>
	</div>
	-->
	<div class="stackElement titlePadding">
		<div class="bgParallax" style="background-image: url('http://st2.depositphotos.com/2288675/7091/i/450/depositphotos_70911643-stock-photo-dialing-telephone-keypad.jpg');">
		</div>
		<div class="containerTitle whiteText">
			<h2>Kontakt</h2>
		</div>
	</div>

	<div class="stackElement smallPadding">
		<div class="containerContent">
			<div class="column-parent two centeredFlexbox">
				<div class="column-element two" >
					KrzysztofWidacki@gmail.com<br/>
					Warszawa<br/>
					ul. Ulica 87 65<br/>
					09-121<br/>
				</div>

				<div class="column-element two">
					<div class="contactCard">
                        <h3>Masz pytania?</h3>
                        <p>Wyślij mi wiadomość:</p>
                        <form>
                            <input placeholder="Twój email*" name="email" type="email" title="Email"/>
                            <input placeholder="Tytuł wiadomości*" name='title' type="text" title="Title"/>
                            <textarea maxlength="360" placeholder="Wiadomość*" name="message" title="Message"></textarea>
                            <input type="submit"/>
                        </form>
                    </div>

				</div>
			</div>


		</div>
	</div>

	<div class="stackElement titlePadding">
		<div class="bgParallax" style="background-image: url('https://static.pexels.com/photos/10651/photo-1432821596592-e2c18b78144f.jpeg');">
		</div>
		<div class="containerTitle whiteText">
			<h2>Położenie</h2>
		</div>
	</div>

	<div class="stackElement smallPadding">
		<div class="containerContent">
			<iframe
			width="70%"
			height="650px"
			frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB_kS8pBP4QixvP2CWk1UtWXu6MoxMZMKk
			&q=Narbutta+84,+02-524+Warszawa" allowfullscreen>
			</iframe>

		</div>
	</div>

    <footer>
	© Copyright - "twoja firma" • Designed by <u>Krzysztof Widacki</u><br>
	Icon Pack License : <u>"PDF"</u>
	</footer>
	<body>
	<script>
		// so the jquery doesn't lag on every scroll event
		var visibleHeader = false;
		scrollFunction();
		window.onscroll = function() {scrollFunction()}; //bind

		function scrollFunction() {
			//var hT = $('#scroll-to').offset().top,
			//hH = $('#scroll-to').outerHeight(),
			//wH = $(window).height(),
			//wS = $(this).scrollTop();
			//console.log($(this).scrollTop(), visibleHeader);
			if ($(this).scrollTop() > 50 && !visibleHeader){
				//console.log("bottom");
				$( "header" ).animate({
				backgroundColor: 'rgba(35, 35, 35, 1.0)'
				}, {duration:500,queue:false, start:function(){
						visibleHeader = true;
				}});
			} else if($(this).scrollTop() <= 20 && visibleHeader) {
				//console.log("top");
				$( "header" ).animate({
				backgroundColor: 'rgba(0, 0, 0, 0.0)'
				}, {duration:500,queue:false, start:function(){
						visibleHeader = false;
				}});

			}
		}


	</script>
<html>