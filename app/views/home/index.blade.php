@extends('application')

@section('content')
<div id="pages">
	<section class="section" id="the-top">
		<header class="header">
            <a id="logo" class="animate slideDown" href="#">{{ HTML::image('/img/logo.png', 'studio cantina logo') }}</a>
            <nav class="navigation-main animate delay fadeIn">
              <ul id="the-anchors">
                <li data-menuanchor="the-cantina"><a href="#the-cantina">the cantina</a></li>
                <li data-menuanchor="clientele"><a href="#clientele">clientele</a></li>
                <li data-menuanchor="word-up"><a href="#word-up">word up</a></li>
                <li data-menuanchor="speak-up"><a href="#speak-up">speak up</a></li>
              </ul>
            </nav>
          </header>
          <div class="circle black animate" id="clientele-section"><a href="#the-cantina">+</a></div>
	</section>
	<section class="section" id="the-cantina">
		<!-- <div class="triangle outline" id="cantina-section"><a href="#the-top"></a></div> -->
		<article class="container">
			<h4>the cantina<br><hr></h4>
			<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum.<br><br>
			Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum.</p>
		</article>
		<div class="circle" id="clientele-section"><a href="#clientele">+</a></div>
	</section>
	<section class="section" id="clientele">
		<!-- <div class="triangle outline" id="cantina-section"><a href="#the-top"></a></div> -->
		<article class="container">
			<ul>
				<li class="col-1-3 logo hidden logo-animate delay01 fadeIn">{{ HTML::image('/img/clientele_jc_logo.png', 'jimmy choo logo') }}</li>
				<li class="col-1-3 logo hidden logo-animate delay02 fadeIn">{{ HTML::image('/img/clientele_mh_logo.png', 'moet hennessy logo') }}</li>
				<li class="col-1-3 logo hidden logo-animate delay03 fadeIn">{{ HTML::image('/img/clientele_jackw_logo.png', 'jack wills logo') }}</li>
				<li class="col-1-3 logo hidden logo-animate delay04 fadeIn">{{ HTML::image('/img/clientele_m-is_logo.png', 'm-is logo') }}</li>
				<li class="col-1-3 logo hidden logo-animate delay05 fadeIn">{{ HTML::image('/img/clientele_habitat_logo.png', 'habitat logo') }}</li>
				<li class="col-1-3 logo hidden logo-animate delay06 fadeIn">{{ HTML::image('/img/clientele_dmail_logo.png', 'daily mail logo') }}</li>
			</ul>
			<div id="next-area" class="hidden animate delay fadeIn">
				<p>
					to manage the privacy of the clientele all portfolio/project samples are only available by request
				</p>
				<h2><a href="#">request portfolio</a></h2>
			</div>
		</article>
		<div class="circle black" id="clientele-section"><a href="#word-up">+</a></div>
	</section>
	<section class="section" id="word-up">
		<!-- <div class="triangle outline" id="cantina-section"><a href="#the-top"></a></div> -->
		<article class="container">
			<?php get_auth_tweet(); ?>
		</article>
		<div class="circle" id="clientele-section"><a href="#speak-up">+</a></div>
	</section>
	<section class="section" id="speak-up">
		<!-- <div class="triangle outline" id="cantina-section"><a href="#the-top"></a></div> -->
		<article class="container">
			<div class="animate delay fadeIn">
				<h4>speak up<br><hr></h4>
				<p>
					in the studio<br>
					+44 (0) 207 482 1905<br><br>on the move<br>
					+44 (0) 7813 931 158<br><br><h4><a href="#">email the studio</a></h4>
				</p>
			</div>
			<footer>
				<h4 class="col-2-4"><a href="#terms-and-conditions">terms &amp; conditions</a></h4>
				<h4 class="col-2-4">&copy;<?php echo date( "Y" ); ?> Studio Cantina Limited</h4>
			</footer>
		</article>
	</section>
	<section class="section" id="terms-and-conditions">
		<article id="terms" class="container">
			<h4><a href="#the-top">back to website</a></h4>
			<h4>terms and conditions<br><hr></h4>
			<div class="col-3-4">
				<ol>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				</ol>
			</div>
		</article>
	</section>
</div>
@stop