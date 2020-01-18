<!-- Start About Me Section -->
	<section class="ftco-about img ftco-section" id="about">
		<div class="main-grid">
            <div id="dobra-1" class="container">
                <div class="row mt-5 mb-5">
					<div class="col-md-3">
						<h2>Conheça <br><span class="lead display-4" style="color: #eeda94">Quem somos</span></h2>
					</div>
					<div class="col-md-8">
						<p>
						O Delta Clube de Tiro e Caça é um clube aberto ao público, localizado na cidade de Belo Horizonte/MG. Em 2019, dois amigos praticantes e adeptos da cultura das armas resolveram expandir o conhecimento sobre tiro esportivo através de um espaço seguro e profissional com o intuito de treinar e aperfeiçoar as técnicas de manuseio de armas de fogo que é a nova tendência mundial. O nome Delta foi escolhido fazendo menção aos Delegados de Polícia, que são chamados assim entre os concurseiros e policiais.
						</p>
					</div>
					
				</div>
				<div class="row mt-5 " style="">
					<div class="col-md-6 col-12">
						<span class="oi oi-sun"></span>
						<h3>Nossa Loja</h3>
						<p>Quer bons preços, ótimo atendimento e produtos de qualidade? Então chegou a hora de você ir até a nossa Loja no Delta Clube de Tiro e Caça. Trabalhamos com as melhores marcas de artigos militares do país; Invictus, Forhonor, Bélica, Team Six, Warfare, Treme Terra Atacado e Rossi. Masculino e feminino. Calças, gandolas, combates, coturnos, canivetes, lanternas é muito mais. É isso mesmo, roupas táticas para o dia-a-dia ou para aquela operação especial, esperamos por você em nossa Loja. Preços, atendimento e parcelamentos com condições especiais. Vamos com tudo guerreiro(a).
						</p>
					</div>
					<div class="col-md-6 col-12">
						<span class="oi oi-grid-two-up"></span>
						<h3>Despachante</h3>
						<p>Nossa equipe tem experiência para prestar um serviço completo de assessoria e acompanhamento de toda a sua documentação referente as suas armas. Processos de transferência de propriedade, aquisição de arma, renovação, alteração de endereços, retirada de CR, guia de trânsito, apostilamento, ou qualquer outro tipo de situação que envolva uma arma de fogo.

						</p>
					</div>
				</div>
			</div>
		</div>			
    </section>
	<!-- End About Me Section -->

		<!-- Start armas Section -->
		<section id="armas" class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-5 heading-section ftco-animate pb-5">
								<h2 class="mb-4">Nossas <br> Armas para uso</h2>
						<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p> -->
							</div>
						</div>
							<div class="row text-center armas">
								<div class="col-md-3 col-12">
									<div class="media block-6 armas d-block ftco-animate">
										<div class="text-center">
											<img width="100" height="100" src="images/carabina.jpg" alt="">
										</div>
										<div class="media-body" class="modal-message">
											<h4 class="heading mb-3">RIFLES/CARABINAS</h4>
											<p class="primary">Na verdade, Mundialmente o mais usado para se referir a fuzil é o termo Rifle. Sendo que Carabina ou Rifle são Designações usadas...</p>
											<a data-toggle="modal" href="#modal1" class="btn btn-dark">Ler tudo</a>
										</div> 
									</div>
								</div>	
								<div class="col-md-3 col-12">
									<div class="media block-6 armas d-block ftco-animate">
										<div class="text-center">
											<img width="100" height="100" src="images/espingarda.jpg" alt="">
										</div>
										<div class="media-body">
											<h4 class="heading mb-3">ESPINGARDAS</h4>
											<p>Uma espingarda é uma arma de fogo portátil de alma lisa, que utiliza como munição cartuchos de projéteis múltiplos ou de um único...</p>
											<a data-toggle="modal" href="#modal2" class="btn btn-dark">Ler tudo</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-12">
									<div class="media block-6 armas d-block ftco-animate">
										<div class="text-center">
											<img width="100" height="100" src="images/pistola.jpg" alt="">
										</div>
										<div class="media-body">
											<h4 class="heading mb-3">PISTOLAS</h4>
											<p>A Pistola é uma arma de fogo ou o feeder, leve, de cano curto. Uma pistola geralmente é uma arma pequena de boa empunhadura e rápido...</p>
											<a data-toggle="modal" href="#modal3" class="btn btn-dark">Ler tudo</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-12">
									<div class="media block-6 armas d-block ftco-animate">
										<div class="text-center">
											<img width="100" height="100" src="images/revolver.jpg" alt="">
										</div>
										<div class="media-body">
											<h4 class="heading mb-3">REVÓLVERES</h4>
											<p>Um revólver (em inglês: revolver) é uma arma de fogo de repetição, de porte individual, normalmente com um só cano e com....</p>
											<a data-toggle="modal" href="#modal4" class="btn btn-dark">Ler tudo</a>
										</div>
									</div> 
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>  
		<!-- End armas Section -->

		<!-- Start Testimonials Section -->
		<section id="work" class="ftco-section">
		  <div class="container">
		  	<div class="row justify-content-center">
		  		<div class="col-md-4 col-12 heading-section text-center ftco-animate pb-5">
					<h2 class="mb-4">Galeria<br>de FOTOS</h2>
				</div>
		  	</div>
		  </div> 
		  <div class="container-fluid px-md-0">
				<div class="row no-gutters">
					<?php foreach($images['galeria'] as $imgs): ?>
						<?php if(substr($imgs,0,3) == 'IMG'): ?>
							<div class="col-md-4 col-12 ftco-animate">
								<div class="model img d-flex align-items-end" style="background-image: url(images/<?=$imgs?>);">
									<a href="images/<?=$imgs?>" class="icon image-popup d-flex justify-content-center align-items-center">
										<span class="icon-expand"></span>
									</a>
								</div>
							</div>
						<?php endif ?>
					<? endforeach ?>
				</div>
			</div> 
		</section>
		<!-- End Project Section -->

		<!-- Start Contact Section -->
		<section class="ftco-section contact-section" id="contact">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-4 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contato</h2>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-4 col-12 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Endereço</h3>
		            <p>Desenvolvimento Web, Belo Horizonte - MG</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-4 col-12 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Telefone</h3>
		            <p>(31) 98026-9648</p>
		            <p>(31) 99452-9648</p>
	            </div>
	          </div>
          </div>
          <div class="col-md-4 col-12 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Email</h3>
		            <p>michaelguitar2ha@gmail.com</p>
		          </div>
	          </div>
          </div>
          <!-- <div class="col-md-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Website</h3>
		            <p><a href="#">yoursite.com</a></p>
	            </div>
	          </div>
          </div> -->
        </div>

        <div class="row block-9">
          <div class="col-md-6 col-12 ftco-animate">
            <form method="post" id="form-delta" action="<?=base_url('/submit')?>" class="form-home p-4 p-md-5 py-md-5">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Seu nome" required name="nome" id="nome">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Seu Email" required name="email" id="email">
			  </div>
			  <div class="form-group">
                <input type="tel" class="form-control" placeholder="Seu Telefone/Celular" required name="telefone" id="telefone">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Assunto" name="assunto" id="assunto">
              </div>
              <div class="form-group">
                <textarea name="mensagem" id="mensagem" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
			  </div>
			  <div class="form-group">
                <input type="text" name="cpf" id="cpf" cols="30" rows="7" class="form-control" placeholder="Se preferir digite também seu CPF">
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar mensagem" class="btn btn-primary py-3 px-5 sendbutton">
              </div>
            </form>
          </div>

          <div class="col-md-6 col-12 d-flex align-items-stretch">
			  <!-- <div id="map"></div> -->
			  <iframe height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34456030.529550046!2d-64.72819975112843!3d-27.566870107769947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a518a690ca2a93d%3A0xdce616971e86954!2sOceano%20Atl%C3%A2ntico%20Sul!5e0!3m2!1spt-BR!2sbr!4v1579371854634!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>
		<!-- End Contact Section -->
		
    