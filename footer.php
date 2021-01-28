<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atlas
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="menuFooter">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>

				</div>

				<div class="col-md-6 ladoDirFooter logoFooter">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="162" height="48" viewBox="0 0 162 48">
							<defs>
									<path id="d3njn6nmva" d="M0 0.149L43.971 0.149 43.971 31.148 0 31.148z"/>
									<path id="3l1oynoukc" d="M0.276 0.166L22.191 0.166 22.191 28.68 0.276 28.68z"/>
							</defs>
							<g fill="none" fill-rule="evenodd">
									<g>
											<g>
													<g transform="translate(-64 -40) translate(64 40) translate(0 .346)">
															<mask id="w24fvokoib" fill="#fff">
																	<use xlink:href="#d3njn6nmva"/>
															</mask>
															<path fill="#FFF" d="M5.9 13.911c.685-1.331 1.528-2.567 2.507-3.682 2.66 2.752 9.655 8.493 21.716 8.493 2.84 0 5.964-.32 9.376-1.071.373 1.447.572 2.965.572 4.527 0 .058-.007.115-.008.173C17.596 28.26 7.982 16.9 5.901 13.91m32.192.045C22.45 17.19 13.986 10.37 11.278 7.586c3-2.216 6.703-3.529 10.708-3.529 7.018 0 13.111 4.03 16.107 9.899M21.986.149C9.862.149 0 10.03 0 22.179c0 2.647.464 5.237 1.38 7.698.293.786 1.036 1.271 1.828 1.271.226 0 .456-.04.681-.123 1.01-.377 1.522-1.503 1.145-2.514-.752-2.023-1.133-4.152-1.133-6.333 0-1.373.158-2.709.448-3.996 1.474 1.639 3.702 3.69 6.817 5.49 5.453 3.15 11.354 4.244 16.92 4.244 4.107 0 8.024-.6 11.45-1.404-.16.657-.345 1.308-.58 1.945-.373 1.012.143 2.137 1.154 2.511 1.012.375 2.132-.144 2.505-1.156.9-2.44 1.356-5.009 1.356-7.634 0-12.147-9.862-22.03-21.985-22.03" mask="url(#w24fvokoib)"/>
													</g>
													<path fill="#FFF" d="M13.324 38.463c-.262-.143-.52-.293-.772-.448-1.764-1.083-3.32-2.45-4.625-4.064-.679-.839-1.907-.967-2.744-.287-.836.68-.965 1.91-.286 2.748 1.584 1.96 3.474 3.62 5.618 4.936.307.189.62.37.938.545.296.162.617.24.933.24.69 0 1.36-.369 1.713-1.018.517-.947.17-2.134-.775-2.652M38.788 33.663c-.838-.68-2.066-.55-2.744.289-1.494 1.846-3.304 3.361-5.379 4.502-.944.518-1.29 1.705-.772 2.652.354.649 1.022 1.016 1.711 1.016.317 0 .639-.078.936-.241 2.522-1.385 4.72-3.226 6.535-5.469.678-.838.55-2.069-.287-2.749M21.986 45.31c-1.67 0-3.03-1.362-3.03-3.036 0-1.673 1.36-3.034 3.03-3.034 1.67 0 3.028 1.361 3.028 3.034 0 1.674-1.358 3.035-3.028 3.035m0-8.703c-3.12 0-5.657 2.543-5.657 5.668 0 3.126 2.538 5.669 5.657 5.669s5.657-2.543 5.657-5.669c0-3.125-2.538-5.668-5.657-5.668M101.05 40.466c0 .055-.044.099-.099.099h-.473c-5.874 0-9.977-2.774-9.977-8.136V9.452c0-.04.025-.077.062-.091l4.853-1.908c.064-.025.134.023.134.092v24.884c0 1.869 1.935 3.077 4.928 3.077h.473c.055 0 .099.043.099.098v4.862z" transform="translate(-64 -40) translate(64 40)"/>
													<path fill="#FFF" d="M100.95 18.717H85.1c-.055 0-.099-.044-.099-.099v-4.86c0-.055.044-.1.1-.1h15.85c.054 0 .099.045.099.1v4.86c0 .055-.045.1-.1.1M110.866 40.628h-4.85c-.056 0-.1-.044-.1-.1V7.5c0-.055.044-.1.1-.1h4.85c.055 0 .1.045.1.1V40.53c0 .055-.045.1-.1.1M135.92 40.628h-4.833c-.06 0-.108-.049-.108-.108V22.247c0-2.857-1.806-4.795-5.356-4.795-3.042 0-5.084 1.91-6.074 2.809-.044.04-.111.036-.151-.007l-3.29-3.547c-.04-.044-.038-.114.007-.156 2.582-2.366 5.955-3.668 9.513-3.668 2.424 0 5.8.535 8.113 3.086 1.475 1.625 2.287 3.854 2.287 6.278V40.52c0 .06-.048.108-.108.108" transform="translate(-64 -40) translate(64 40)"/>
													<path fill="#FFF" d="M124.864 41.373c-3.096 0-5.579-.797-7.379-2.371-1.8-1.574-2.752-3.792-2.752-6.415 0-2.009.711-4.882 4.25-6.891 4.608-2.617 11.07-2.483 13.336-2.018 1.63.335 1.278.572 1.832.885l-2.491 3.316c.439.248.842.299.956.309 1.301-1.203-12.833-1.74-12.833 4.4 0 2.472 1.71 4.033 5.081 4.033 3.258 0 6.31-2.996 6.34-3.024l2.947 2.582c-.181.164-4.05 5.194-9.287 5.194" transform="translate(-64 -40) translate(64 40)"/>
													<g transform="translate(-64 -40) translate(64 40) translate(138.776 12.717)">
															<mask id="f1tgpdsjfd" fill="#fff">
																	<use xlink:href="#3l1oynoukc"/>
															</mask>
															<path fill="#FFF" d="M11.523 28.68C4.466 28.68.796 22.874.29 22.01c-.031-.05-.01-.117.045-.14l4.528-1.938c.042-.018.09-.005.118.032.8 1.122 3.003 3.921 6.542 3.921 2.098 0 5.62-.796 5.62-4.355 0-1.806-1.415-2.796-5.822-3.386-.194-.027-.395-.052-.603-.079-1.723-.22-3.869-.492-5.74-1.416C2.36 13.356.976 11.132.976 8.219.976 3.327 5.14.166 11.585.166c5.001 0 8.396 2.162 10.338 3.934.048.044.04.12-.015.156L17.63 7.029c-.033.021-.077.023-.109-.002-1.413-1.13-2.887-2.278-5.936-2.333-1.96-.036-5.56.747-5.56 3.525 0 1.516.74 2.244 5.33 2.828.218.027.431.055.636.082 1.585.213 3.98.534 6.016 1.58 2.737 1.41 4.184 3.768 4.184 6.821 0 5.558-4.187 9.15-10.668 9.15" mask="url(#f1tgpdsjfd)"/>
													</g>
													<path fill="#FFF" d="M82.273 40.534L72.067 15.02c-.033-.082-.15-.082-.182 0L61.682 40.534c-.015.038-.05.062-.09.062h-5.228c-.07 0-.117-.07-.092-.134l13.335-33.35c.015-.038.051-.062.091-.062h4.554c.04 0 .077.023.091.062l13.34 33.35c.027.064-.02.134-.09.134h-5.228c-.04 0-.077-.024-.092-.062" transform="translate(-64 -40) translate(64 40)"/>
													<path fill="#FFF" d="M62.413 37.098L60.562 32.39 77.595 25.666 79.445 30.374z" transform="translate(-64 -40) translate(64 40)"/>
											</g>
									</g>
							</g>
					</svg>

						<p>Soluções à medida para gestão de risco no sector agrícola</p>
				</div>

				<div class="col-md-6 footerBottom">
					<div class="copyRight">
						<p>Atlas © 2020 All rights reserved.</p>
						<div class="poliPriva">
							<a href="#">Política de Privacidade</a><span class="sep">|</span>
							<a href="#">Política de Cookies</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 ladoDirFooter footerBottom">
							<div class="faleConnosco">
								<a href="#" class="botaoBorda">FALE CONNOSCO</a>
							</div>
					<div class="contacFooterWrapper">
						<div class="linkedin">
							<a href="#" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
							</a>
						</div>
						<div class="contacFooter">
							<a href="mailto:info@atlasmga.com">info@atlasmga.com</a>
							<a href="tel:213186200">21 318 6200</a>
						</div>
					</div>
				</div>




			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



<div class="contactForm">
	<div class="contactWraooer">
		<div class="formWrapper">
		<div class="closeContact">
			<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
					<g fill="none" fill-rule="evenodd">
							<g>
									<g>
											<g>
													<path d="M0 0H34V34H0z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
													<path fill="#27D290" d="M27.79 6.21c-.301-.3-.788-.3-1.088 0L17 15.91l-9.702-9.7c-.3-.3-.787-.3-1.087 0-.3.301-.3.788 0 1.088L15.91 17l-9.7 9.702c-.3.3-.3.787 0 1.087.3.3.787.3 1.087 0L17 18.09l9.702 9.7c.3.3.787.3 1.087 0 .3-.3.3-.787 0-1.087L18.09 17l9.7-9.702c.3-.3.3-.787 0-1.087z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
											</g>
									</g>
							</g>
					</g>
			</svg>
		</div>
		<h1>Fale connosco</h1>
		<p>Envie-nos mensagem e prometemos ser breves a responder.</p>
		<?php echo do_shortcode('[contact-form-7 id="625" title="Formulário de contacto 1"]');?>
		</div>
	</div>
</div>


<div id="cookie-notice">
	<div class="wrapperCookie">
	<div class="closeCookie" onclick="acceptCookie();">
			<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
					<g fill="none" fill-rule="evenodd">
							<g>
									<g>
											<g>
													<path d="M0 0H34V34H0z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
													<path fill="#27D290" d="M27.79 6.21c-.301-.3-.788-.3-1.088 0L17 15.91l-9.702-9.7c-.3-.3-.787-.3-1.087 0-.3.301-.3.788 0 1.088L15.91 17l-9.7 9.702c-.3.3-.3.787 0 1.087.3.3.787.3 1.087 0L17 18.09l9.702 9.7c.3.3.787.3 1.087 0 .3-.3.3-.787 0-1.087L18.09 17l9.7-9.702c.3-.3.3-.787 0-1.087z" transform="translate(-1175 -47) translate(1168 40) translate(7 7)"/>
											</g>
									</g>
							</g>
					</g>
			</svg>
		</div>
	<h1>Damos valor à sua privacidade</h1>
	<p>Com a sua permissão, nós e os nossos parceiros podemos usar dados precisos de localização geográfica e identificação através da digitalização do dispositivo. Pode clicar para consentir com o nosso processamento e o dos nossos parceiros, conforme descrito acima. Como alternativa, pode aceder a informações mais detalhadas e alterar as suas preferências antes de consentir ou recusar o consentimento. Observe que algum do processamento dos seus dados pessoais pode não exigir o seu consentimento, mas tem o direito de se opor a esse processamento. As suas preferências serão aplicadas apenas a este website.</p>
	<a class="botao botaoBorda corverde" onclick="acceptCookie();">ACEITAR</a>
	</div>
</div>







<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js?ver=1" id="atlas-slick-js"></script>
<script>


	$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll <= 110) {
			$('header').addClass('menuTopo')
			} else{
			$('header').removeClass('menuTopo')
		}
	}); //missing );



	function acceptCookie(){
	date = new Date();
    date.setTime(date.getTime()+(1*24*60*60*1000));
	expires = "; expires="+date.toUTCString();
	//document.cookie="cookieaccepted=1; expires=Thu, 18 Dec 2030 12:00:00 UTC; path=/",
	document.cookie="cookieaccepted=1" + expires + "; path=/",
	document.getElementById("cookie-notice").style.visibility="hidden"
}

	document.cookie.indexOf("cookieaccepted")<0&&(
	document.getElementById("cookie-notice").style.visibility="visible");






(function($) {

	$('.faleConnosco').click(function(ab){
		ab.preventDefault();
    $('body').toggleClass('contactOpen');
	});





	$('.menu-toggle').click(function(){
    $('body').toggleClass('menuOpen');
	});





	$('.openContact').click(function(){
    $('body').addClass('contactOpen');
	});


	$('.closeContact').click(function(){
    $('body').removeClass('contactOpen');
	});



	$('a[href*=\\#]:not([href=\\#])').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
							var target = $(this.hash);
							target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
							if (target.length) {
									$('html, body').animate({
											scrollTop: target.offset().top - 150
									}, 500);
									return false;
							}
					}
			});





  var url = document.location.toString();

  if (url.match('#')) {
		var urlfinal = url.split('#')[1];


		$('html, body').animate({
											scrollTop: $('#'+ urlfinal +'').offset().top - 150
									}, 500);
									return false;

  } else{
    //$('body').addClass('About');
  }

})( jQuery );



wow = new WOW(
                      {
                     // boxClass:     'wow',      // default
                     // animateClass: 'animado', // default
                      //offset:       0,          // default
                      //mobile:       true,       // default
                      //live:         true        // default
                    }
                    )
                    wow.init();



</script>








</body>
</html>
