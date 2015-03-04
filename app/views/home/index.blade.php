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
          <div class="circle black animate" id="clientele-section"><a href="#the-cantina"></a></div>
	</section>
	<section class="section" id="the-cantina">
		<div class="circle-up" id="cantina-section"><a href="#the-top"></a></div>
		<article class="container">
			<h4>the cantina<br><hr></h4>
<p>
once upon a time in camden town.<br>
providing art direction, design consultancy and production management services for both private and agency based clients. with an extensive network of talent, our creativity is limitless.
<br><br>
our methodology is simple.<br>
work hard, be honest and keep the communication coming. because of this you know what we are going to deliver and when.
<br><br>
all creative projects are welcome.<br>
from fashion to fizz to film, we have worked on projects for the luxury, retail, design and film industries. big or small, no idea is simple, they all need to start somewhere.
</p>
		</article>
		<div class="circle" id="clientele-section"><a href="#clientele"></a></div>
	</section>
	<section class="section" id="clientele">
		<div class="circle-up black" id="cantina-section"><a href="#the-top"></a></div>
		<article class="container">
			<ul>
				<li class="col-1-3 logo hidden logo-animate delay01 fadeIn">{{ HTML::image('/img/clientele_jc_logo.png', 'jimmy choo logo') }}</li>
				<li class="col-1-3 logo hidden logo-animate delay02 fadeIn">{{ HTML::image('/img/clientele_mh_logo.png', 'moet hennessy logo') }}</li>
				<li class="col-1-3 logo hidden logo-animate delay03 fadeIn">{{ HTML::image('/img/clientele_jackw_logo.png', 'jack wills logo') }}</li>
				<!-- <li class="col-1-3 logo hidden logo-animate delay04 fadeIn">{{ HTML::image('/img/clientele_m-is_logo.png', 'm-is logo') }}</li> -->
				<li class="col-1-3 logo hidden logo-animate delay05 fadeIn">{{ HTML::image('/img/clientele_habitat_logo.png', 'habitat logo') }}</li>
				<li class="col-1-3 logo hidden logo-animate delay06 fadeIn">{{ HTML::image('/img/clientele_dmail_logo.png', 'daily mail logo') }}</li>
			</ul>
			<div id="next-area" class="hidden animate delay fadeIn">
				<p>
					worldwide or down the street. some of the clients we have worked with.<br>
download a sample of the latest projects below. <a href="mailTo:studio@studiocantina.com">email</a> for more details.
				</p>
				<h4><a href="{{ URL::asset('portfolio-sc.pdf') }}">download portfolio</a></h4>
			</div>
		</article>
		<div class="circle black" id="clientele-section"><a href="#word-up"></a></div>
	</section>
	<section class="section" id="word-up">
		<div class="circle-up" id="cantina-section"><a href="#the-top"></a></div>
		<article class="container">
			<?php get_auth_tweet(); ?>
		</article>
		<h4 id="word"><a target="_blank" href="https://twitter.com/studiocantina">word to big bird</a></h4>
		<div class="circle" id="clientele-section"><a href="#speak-up"></a></div>
	</section>
	<section class="section" id="speak-up">
		<div class="circle-up black" id="cantina-section"><a href="#the-top"></a></div>
		<article class="container">
			<div class="animate delay fadeIn">
				<h4>speak up<br><hr></h4>
				<p>
					camden, london<br><br>
					in the studio<br>
					+44 (0) 207 482 1905<br><br>on the move<br>
					+44 (0) 7813 931 158<br><br><h4><a class="email" href="mailTo:studio@studiocantina.com">email</a></h4>
				</p>
			</div>
		</article>
		<footer>
			<h5 class="col-2-4"><a href="/terms">terms &amp; conditions</a></h5>
			<h5 class="col-2-4">&copy;<?php echo date( "Y" ); ?> Studio Cantina Limited</h5>
		</footer>
	</section>
</div>
@stop