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
		<!-- <div class="triangle outline" id="cantina-section"><a href="#the-top"></a></div> -->
		<article class="container">
			<h4>the cantina<br><hr></h4>
			<p>founded and named on a love for Italian Western’s produced in the mid-sixies, Studio Cantina provides art direction, design consultancy and project management services for both private and agency based clients.  
<br><br>
our methodology is based on strong work ethics, honesty and open communication – you know what we are going to deliver and when. the devil is in the detail, so ensuring a high quality finish both internally and externally on each project is core.
<br><br>
welcoming projects small or large from website or mobile app design and development, UX/UI development, branding or re-branding and printed.
</p>
		</article>
		<div class="circle" id="clientele-section"><a href="#clientele"></a></div>
	</section>
	<section class="section" id="clientele">
		<!-- <div class="triangle outline" id="cantina-section"><a href="#the-top"></a></div> -->
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
					to manage the privacy of our clientele all portfolio and project samples are only available by request
				</p>
				<h4><a href="#">request portfolio</a></h4>
			</div>
		</article>
		<div class="circle black" id="clientele-section"><a href="#word-up"></a></div>
	</section>
	<section class="section" id="word-up">
		<!-- <div class="triangle outline" id="cantina-section"><a href="#the-top"></a></div> -->
		<article class="container">
			<?php get_auth_tweet(); ?>
		</article>
		<div class="circle" id="clientele-section"><a href="#speak-up"></a></div>
	</section>
	<section class="section" id="speak-up">
		<!-- <div class="triangle outline" id="cantina-section"><a href="#the-top"></a></div> -->
		<article class="container">
			<div class="animate delay fadeIn">
				<h4>speak up<br><hr></h4>
				<p>
					camden, london<br><br>
					in the studio<br>
					+44 (0) 207 482 1905<br><br>on the move<br>
					+44 (0) 7813 931 158<br><br><h4><a href="#">email the studio</a></h4>
				</p>
			</div>
			<footer>
				<h5 class="col-2-4"><a href="#terms-and-conditions">terms &amp; conditions</a></h5>
				<h5 class="col-2-4">&copy;<?php echo date( "Y" ); ?> Studio Cantina Limited</h5>
			</footer>
		</article>
	</section>
	<section class="section" id="terms-and-conditions">
		<article id="terms" class="container">
			<h4><a href="#the-top">back to website</a></h4>
			<h4>terms and conditions<br><hr></h4>
			<div class="col-3-4">
				<ol>
					<li><h4>USE OF WEBSITE</h4><p>Please read these terms of use carefully before you start to use the site. By using our site, you indicate that you accept these terms of use and that you agree to abide by them. If you do not agree to these terms of use, please refrain from using our site.</p></li>
					<li><h4>RELIANCE ON INFORMATION POSTED AND DISCLAIMER</h4><p>The materials contained on our site are provided for general information purposes only and do not claim to be or constitute legal or other professional advice and shall not be relied upon as such.

					We do not accept any responsibility for any loss which may arise from accessing or reliance on the information on this site and to the fullest extent permitted by English law, we exclude all liability for loss or damages direct or indirect arising from use of this site.
					</p></li>
										<li><h4>information about us</h4><p>Studiocantina.com is a site operated by Studio Cantina Limited ("We"); we are a company registered in England under registration number 08539202. Our registered office is ‘Brunel House, 340 Firecrest Court, Centre Park, Warrington, United Kingdom, WA1 1RG’.  Our VAT number is 165218021.</p></li>
										<li><h4>accessing our site</h4><p>Access to our site is permitted on a temporary basis, and we reserve the right to withdraw or amend the service we provide on our site without notice (see below). We will not be liable if for any reason our site is unavailable at any time or for any period.</p></li>
										<li><h4>INTELLECTUAL PROPERTY RIGHTS</h4><p>We are the owner or the licensee of all intellectual property rights in our site, and in the material published on it excluding brand identities of the clientele that we have served.  Those works are protected by copyright laws and treaties around the world.  All such rights are reserved. 

					You may print off one copy, and may download extracts, of any page(s) from our site for your personal reference and you may draw the attention of others within your organisation to material posted on our site.  

					You must not modify the paper or digital copies of any materials you have printed off or downloaded in any way, and you must not use any illustrations, photographs, video or audio sequences or any graphics separately from any accompanying text. 

					Our status (and that of any identified contributors) as the authors of material on our site must always be acknowledged. 

					You must not use any part of the materials on our site for commercial purposes without obtaining a licence to do so from us or our licensors.

					If you print off, copy or download any part of our site in breach of these terms of use, your right to use our site will cease immediately and you must, at our option, return or destroy any copies of the materials you have made.
					</p></li>
					<li><h4>site updates</h4><p>We aim to update our site regularly, and may change the content at any time. If the need arises, we may suspend access to our site, or close it indefinitely. Any of the material on our site may be out of date at any given time, and we are under no obligation to update such material.</p></li>
					<li><h4>our liability</h4><p>The material displayed on our site is provided without any guarantees, conditions or warranties as to its accuracy. To the extent permitted by law, we, and third parties connected to us hereby expressly exclude:
					<ul>
					<li> All conditions, warranties and other terms which might otherwise be implied by statute, common law or the law of equity.</li>
					<li> Any liability for any direct, indirect or consequential loss or damage incurred by any user in connection with our site or in connection with the use, inability to use, or results of the use of our site, any websites linked to it and any materials posted on it, including, without limitation any liability for:
						<ul>
							<li> loss of income or revenue;</li>
							<li> loss of business;</li>
							<li> loss of profits or contracts;</li>
							<li> loss of anticipated savings;</li>
							<li> loss of data;</li>
							<li> loss of goodwill;</li>
							<li> wasted management or office time; and
							for any other loss or damage of any kind, however arising and whether caused by tort (including negligence), breach of contract or otherwise, even if foreseeable, provided that this condition shall not prevent claims for loss of or damage to your tangible property or any other claims for direct financial loss that are not excluded by any of the categories set out above.</li>
						</ul>
					</li>
					</ul>
					This does not affect our liability for death or personal injury arising from our negligence, nor our liability for fraudulent misrepresentation or misrepresentation as to a fundamental matter, nor any other liability which cannot be excluded or limited under applicable law.
					</p></li>
					<li><h4>information we collect</h4>
						<p>In running and maintaining our website we may collect and process the following data about you:
</p>
						<ul><li>Information about your use of our site including details of your visits such as pages viewed and the resources that you access. Such information includes traffic data, location data and other communication data.</li>

						<li> Information provided voluntarily by you. For example, when you register for information.</li>

						<li> Information that you provide when you communicate with us by any means.</li>
						</ul>
					</li>
					<li>
						<h4>use of cookies</h4>
						<p>Cookies provide information regarding the computer used by a visitor. We may use cookies where appropriate to gather information about your computer in order to assist us in improving our website.
						<br><br>
						We may gather information about your general internet use by using the cookie. Where used, these cookies are downloaded to your computer and stored on the computer’s hard drive. Such information will not identify you personally; it is statistical data which does not identify any personal details whatsoever.
						<br><br>
						Our advertisers may also use cookies, over which we have no control. Such cookies (if used) would be downloaded once you click on advertisements on our website.
						<br><br>
						You can adjust the settings on your computer to decline any cookies if you wish. This can be done within the “settings” section of your computer. For more information please read the advice at AboutCookies.org.
						</p>
					</li>
					<li>
						<h4>use of your information</h4>
						<p>We use the information that we collect from you (if any) to provide our services to you. In addition to this we may use the information for one or more of the following purposes:</p>
						<ul>
							<li> To provide information to you that you request from us relating to our products or services.</li>
							<li> To provide information to you relating to other products that may be of interest to you. Such additional information will only be provided where you have consented to receive such information.</li>
							<li> To inform you of any changes to our website, services or goods and products.</li>
						</ul>
						<p>If you have previously purchased services from us we may provide to you details of similar services, or other goods and services that you may be interested in.
						<br><br>
						We never give your details to third parties to use your data to enable them to provide you with information regarding unrelated goods or services.
						</p>
					</li>
					<li>
						<h4>viruses, hacking and other offences</h4>
						<p>
							You must not misuse our site by knowingly introducing viruses, trojans, worms, logic bombs or other material which is malicious or technologically harmful. You must not attempt to gain unauthorised access to our site, the server on which our site is stored or any server, computer or database connected to our site. You must not attack our site via a denial-of-service attack or a distributed denial-of service attack.
<br><br>
By breaching this provision, you would commit a criminal offence under the Computer Misuse Act 1990. We will report any such breach to the relevant law enforcement authorities and we will co-operate with those authorities by disclosing your identity to them. In the event of such a breach, your right to use our site will cease immediately.
<br><br>
We will not be liable for any loss or damage caused by a distributed denial-of-service attack, viruses or other technologically harmful material that may infect your computer equipment, computer programs, data or other proprietary material due to your use of our site or to your downloading of any material posted on it, or on any website linked to it.

						</p>
					</li>
					<li>
						<h4>links from our site</h4>
						<p>Where our site contains links to other sites and resources provided by third parties, these links are provided for your information only.  We have no control over the contents of those sites or resources, and accept no responsibility for them or for any loss or damage that may arise from your use of them.  When accessing a site via our website we advise you check their terms of use and privacy policies to ensure compliance and determine how they may use your information.</p>
					</li>
					<li>
						<h4>jurisdiction and applicable law</h4>
						<p>
						The English courts will have non-exclusive jurisdiction over any claim arising from, or related to, a visit to our site. 
						<br><br> 
						These terms of use and any dispute or claim arising out of or in connection with them or their subject matter or formation (including non-contractual disputes or claims) shall be governed by and construed in accordance with the law of England and Wales.
						</p>
					</li>
					<li>
						<h4>variations</h4>
						<p>We may revise these terms of use at any time by amending this page. You are expected to check this page from time to time to take notice of any changes we made, as they are binding on you. Some of the provisions contained in these terms of use may also be superseded by provisions or notices published elsewhere on our site.</p>
					</li>
					<li>
						<h4>contacting us</h4>
						<p>Please do not hesitate to contact us regarding any matter relating to these ‘terms and conditions’ via email at studio@studiocantina.com.</p>
					</li>
				</ol>
			</div>
		</article>
	</section>
</div>
@stop