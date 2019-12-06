<?php $v->layout("_theme"); ?>


 <!--FEATURES-->
<div class="home_lancamentos">
        <section class="container content">
            <header class="home_lancamentos_header">
                <h2>Últimos Lanaçamentos</h2>
            </header>

            <div class="home_lancamentos_content">
                <article class="radius">

                    <header>
                        <img alt="Contas a receber" title="Contas a receber"
                             src="<?= theme("/assets/images/predio1.jpg"); ?>"/>
      
                    </header>

                      <h3>Lançamento Exemplo 1</h3>
                      <p>Prédio com elevador Salão de festa, apartamentos com suite</p>

                    <a href="<?= url("/predio1"); ?>" class="btn_features btn_features-primary">Veja as Plantas</a>




                </article>

                <article class="radius">
                    <header>
                        <img alt="Contas a pagar" title="Contas a pagar"
                             src="<?= theme("/assets/images/predio2.jpg"); ?>"/>
                      
                    </header>
                    
                    <h3>Lançamento Exemplo 2</h3>
                     <p>Prédio com elevador Salão de festa, apartamentos com suite</p>
                    <a href="<?= url("/predio2"); ?>" class="btn_features btn_features-primary">Veja as Plantas</a>

                </article>

            </div>
        </section>
    </div>

<div class="home_about">
    <div class="home_about_content container content">
        <header class="home_about_content_flex">
           <img src="<?= theme("/assets/images/logo4.png"); ?>" alt="Image" class="img-fluid" width="30%" height="60%" botder="0">
        </header>

        <div class="home_about_content_flex">

             <h1>Sobre a Nicole Construtora</h1>
             <p>Nicole Construtora e Incorporadora é uma empresa que está a 11 no mercado atuando com segmento da construção e vendas
                de apartamentos na cidade de Joinville. Atualmente os emprendimentos diversos já somam 18 prédios prontos e entregues.</p>
        </div>
    </div>

      <div class="projects-flex-box projects-container-box">
          <div class="projects-content-box">
              <div class="projects-carousel-wrap">
                  <div class="owl-carousel hero-slide">
                      <a href="<?= url("/predio1"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>

                      <a href="<?= url("/predio2"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>

                      <a href="<?= url("/predio1"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>

                      <a href="<?= url("/predio2"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>



                      <a href="<?= url("/predio1"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>

                      <a href="<?= url("/predio2"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>



                      <a href="<?= url("/predio1"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>

                      <a href="<?= url("/predio2"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>


                      <a href="<?= url("/predio1"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>

                      <a href="<?= url("/predio2"); ?>" class="home_portfolio">
                          <div class="picture">
                              <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                              <div class="category color--filmes"></div>
                          </div>
                          <div class="caption">Exemplo</div>
                      </a>



                  </div>
              </div>
          </div>
      </div>
</div>

<div class="home_featured">
    <div class="home_featured_content container content">
        <h2>Destaque de Vendas e Aluguel</h2>
                <div class="home_featured_carousel ">
                    <div class="owl-carousel home_featured-slider">
                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/1"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                                </a>
                            </div>

                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>
                            </div>
                            <header class="home_featured_amenities">
                                        <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                    <ul>
                                        <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                        <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                        <li title="Vagas"><i class="icom-car"></i> 1</li>
                                    </ul>
                            </header>
                        </div>

                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/2"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                                </a>
                            </div>


                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>

                                <div class="home_featured_amenities">
                                    <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                    <ul class="home_featured_amenities_left">
                                        <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                        <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                        <li title="Vagas"><i class="icom-car"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/predio1"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                                </a>
                            </div>

                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>
                            </div>
                            <header class="home_featured_amenities">
                                <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                <ul>
                                    <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                    <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                    <li title="Vagas"><i class="icom-car"></i> 1</li>
                                </ul>
                            </header>
                        </div>

                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/3"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                                </a>
                            </div>


                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>

                                <div class="home_featured_amenities">
                                    <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                    <ul class="home_featured_amenities_left">
                                        <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                        <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                        <li title="Vagas"><i class="icom-car"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/1"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                                </a>
                            </div>

                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>
                            </div>
                            <header class="home_featured_amenities">
                                <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                <ul>
                                    <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                    <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                    <li title="Vagas"><i class="icom-car"></i> 1</li>
                                </ul>
                            </header>
                        </div>

                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/predio2"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                                </a>
                            </div>


                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>

                                <div class="home_featured_amenities">
                                    <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                    <ul class="home_featured_amenities_left">
                                        <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                        <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                        <li title="Vagas"><i class="icom-car"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/predio1"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                                </a>
                            </div>

                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>
                            </div>
                            <header class="home_featured_amenities">
                                <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                <ul>
                                    <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                    <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                    <li title="Vagas"><i class="icom-car"></i> 1</li>
                                </ul>
                            </header>
                        </div>

                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/predio2"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                                </a>
                            </div>


                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>

                                <div class="home_featured_amenities">
                                    <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                    <ul class="home_featured_amenities_left">
                                        <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                        <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                        <li title="Vagas"><i class="icom-car"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/predio1"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                                </a>
                            </div>

                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>
                            </div>
                            <header class="home_featured_amenities">
                                <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                <ul>
                                    <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                    <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                    <li title="Vagas"><i class="icom-car"></i> 1</li>
                                </ul>
                            </header>
                        </div>

                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/predio2"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                                </a>
                            </div>


                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>

                                <div class="home_featured_amenities">
                                    <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                    <ul class="home_featured_amenities_left">
                                        <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                        <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                        <li title="Vagas"><i class="icom-car"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/predio1"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio1.jpg" alt="Image" class="">
                                </a>
                            </div>

                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>
                            </div>
                            <header class="home_featured_amenities">
                                <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                <ul>
                                    <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                    <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                    <li title="Vagas"><i class="icom-car"></i> 1</li>
                                </ul>
                            </header>
                        </div>

                        <div class="home_featured_item">
                            <div class="home_featured_item_image">
                                <a href="<?= url("/predio2"); ?>" class="img-link">
                                    <img src="themes/cafeweb/assets/images/predio2.jpg" alt="Image" class="">
                                </a>
                            </div>


                            <div class="home_featured_item_contents">
                                <p>VILLEFORT - Apartamento - Apartamento com ótima localização central
                                    no edifício villeforte, 2 quartos sendo 1 com armário...</p>
                                <address>Joiville, Centro, SC</address>

                                <div class="home_featured_amenities">
                                    <p><strong class="hidden-md">Área:</strong> 95,00<sup>m2</sup></p>
                                    <ul class="home_featured_amenities_left">
                                        <li  data-toggle="tooltip" data-placement="bottom" data-container="body" title="Dormitórios"><i class="icom-bed" ></i> 2</li>
                                        <li title="Banheiro"><i class="icom-bath"></i> 2</li>
                                        <li title="Vagas"><i class="icom-car"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
    </div>
</div>

