<?php if(!class_exists('Rain\Tpl')){exit;}?><main>
            <section class="container ">

                <div class="content ">
                    <div class="catproduto">
                        <span>Pagina inicial</span> | <?php $counter1=-1;  if( isset($categories) && ( is_array($categories) || $categories instanceof Traversable ) && sizeof($categories) ) foreach( $categories as $key1 => $value1 ){ $counter1++; ?> <span> <?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </span><?php } ?> | <span> <?php echo htmlspecialchars( $product["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </span>
                    </div>

                    <div class="box-large fl-left">
                        <img id="gallery_01" src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-zoom-image="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" width="200" height="600"/> 

                        <div id="gallery_01" >
                            <a href="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-image="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-zoom-image="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                <img id="img_01" src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" />
                            </a> 
                            <a href="/res/site/images/large/image1.jpg" data-image="/res/site/images/small/image1.png" data-zoom-image="/res/site/images/large/image1.jpg">
                                <img id="img_01" src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" />
                            </a>
                            <a href="#" data-image="/res/site/images/small/image3.png" data-zoom-image="/res/site/images/large/image3.jpg">
                                <img id="img_01" src="/res/site/images/thumb/image3.jpg" /> 
                            </a>
                            <a href="#" data-image="/res/site/images/small/image4.png" data-zoom-image="/res/site/images/large/image4.jpg"> 
                                <img id="img_01" src="/res/site/images/thumb/image4.jpg" />
                            </a> 
                            <a href="#" data-image="/res/site/images/small/image4.png" data-zoom-image="/res/site/images/large/image4.jpg"> 
                                <img id="img_01" src="/res/site/images/thumb/image4.jpg" />
                            </a>
                        </div>

                    </div><!--Produto-->
                    <div class="box-large fl-rigth last">
                      <span class="cod">Cod:#0000</span>
                        <p class="codname">Conjunto Lycra Trasparente - lilas</p>
                        <span class="codava">Avaliações <small>100</small> <img src="/res/site/imagens/star.png"/><img src="/res/site/imagens/star.png"/><img src="/res/site/imagens/star.png"/></span>

                        <div class="box_compras">
                            <span class="de">De R$35,90</span>

                            <span class="por"><small>Por R$ <?php echo formatPrice($product["vlprice"]); ?></small></span>

                            <span class="vezes box-large fl-left">ou 6x R$ <?php echo formatPrice(($product["vlprice"]) / 6); ?> sem juros</span>
                            <div>
                                <span class="box-large fl-rigth"><input class="btn btn-red bt" type="submit" name="" value="Comprar"/></span>  
                                <div class="clear"></div>
                            </div>
                        </div>

                        <span class="verparcelas al-center fl-none"><a href="#">ver parcelas</a></span>

                        <span class="fl-left calcule">Calcule o Frete</span>
                        <div class="cep">
                            <input class="fl-left inputcep" type="text" name="text"/>                                
                            <input class="btn btn-red bt radius btcep" type="submit" name="" value="Calcular"/>
                        </div>

                        <div/>

                        <div class="simpleTabs">
                            <ul class="simpleTabsNavigation">
                                <li><a href="#">Formas de Pagamento</a></li>
                                <li><a href="#">Caracteristicas</a></li>
                                <li><a href="#">Itens</a></li>
                            </ul>
                            <div class="simpleTabsContent">
                                <table class="tg">
                                    <tr>
                                        <td>1x sem juros</td>
                                        <td>R$  30,90</td>
                                        <td>5x sem juros</td>
                                        <td>R$  6,18</td>
                                        <td>9x sem juros</td>
                                        <td>R$  3,43</td>
                                        <td>2x sem juros</td>
                                        <td>R$  15,45</td>
                                        <td>6x sem juros</td>
                                        <td>R$  5,15</td>
                                        <td>10x sem juros</td>
                                        <td>R$  3,09</td>
                                    </tr>
                                    <tr>
                                        <td>3x sem juros</td>
                                        <td>R$  10,30</td>
                                        <td>7x sem juros</td>
                                        <td>R$  4,42</td>
                                        <td>11x sem juros</td>
                                        <td>R$  2,80</td>
                                        <td>4x sem juros</td>
                                        <td>R$   17,72</td>
                                        <td>8x sem juros</td>
                                        <td>R$  3,86</td>
                                        <td>12x sem juros</td>
                                        <td>R$  2,57</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="simpleTabsContent">
                                <div>
                                    <div>
                                        <div>
                                            <div>
                                                <p>Camisola 86% Poliamida / 14% Elastano / Calcinha 86% Poliamida / 14% Elastano</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simpleTabsContent">
                                <p>Sutiã / Calcinha em Renda</p>
                            </div>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>

            </section>
            <section class="container">
                <div class="content">
                    <h1 class="promocoes">Mais Visto</h1>
                    <article class="box box-small produto">
                        <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_01.png"></a>
                        <h2 class="al-center"><a  href="produto/&p=11">Conjunto de Renda Lilas Fio Dental</a></h2>
                        <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                        <div class="preco al-center"><small>R$ 49,50</small></div>
                        <h3 class="preco_parcelado al-center"></h3>
                        <div class="">
                            <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                                <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                                <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                                <input type="hidden" 		name="id_produto" value = "11"/>
                                <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                            </form>
                            <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                            <div class="preco_parcelado al-center" ><font><b>6x</b> de R$ 16,63 nos cartões</font><img src=""></div>
                        </div>
                    </article>
                    <article class="box box-small produto">
                        <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_01.png"></a>
                        <h2 class="al-center"><a  href="produto/&p=11">Conjunto de Renda Lilas Fio Dental</a></h2>
                        <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                        <div class="preco al-center"><small>R$ 49,50</small></div>
                        <h3 class="preco_parcelado al-center"></h3>
                        <div class="">
                            <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                                <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                                <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                                <input type="hidden" 		name="id_produto" value = "11"/>
                                <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                            </form>
                            <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                            <div class="preco_parcelado al-center" ><font><b>6x</b> de R$ 16,63 nos cartões</font><img src=""></div>
                        </div>
                    </article>
                    <article class="box box-small produto">
                        <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_01.png"></a>
                        <h2 class="al-center"><a  href="produto/&p=11">Conjunto de Renda Lilas Fio Dental</a></h2>
                        <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                        <div class="preco al-center"><small>R$ 49,50</small></div>
                        <h3 class="preco_parcelado al-center"></h3>
                        <div class="">
                            <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                                <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                                <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                                <input type="hidden" 		name="id_produto" value = "11"/>
                                <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                            </form>
                            <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                            <div class="preco_parcelado al-center" ><font><b>6x</b> de R$ 16,63 nos cartões</font><img src=""></div>
                        </div>
                    </article>
                    
                    <article class="box box-small produto last">
                        <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_01.png"></a>
                        <h2 class="al-center"><a  href="produto/&p=11">Conjunto de Renda Lilas Fio Dental</a></h2>
                        <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                        <div class="preco al-center"><small>R$ 49,50</small></div>
                        <h3 class="preco_parcelado al-center"></h3>
                        <div class="">
                            <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                                <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                                <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                                <input type="hidden" 		name="id_produto" value = "11"/>
                                <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                            </form>
                            <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                            <div class="preco_parcelado al-center" ><font><b>6x</b> de R$ 16,63 nos cartões</font><img src=""></div>
                        </div>
                    </article>

                    <div class="clear"></div>
                </div>
            </section>
            
            <section class="container">
                <div class="content">
                    <h1 class="promocoes">Itens Relacionados</h1>
                    <article class="box box-small produto">
                        <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_01.png"></a>
                        <h2 class="al-center"><a  href="produto/&p=11">Conjunto de Renda Lilas Fio Dental</a></h2>
                        <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                        <div class="preco al-center"><small>R$ 49,50</small></div>
                        <h3 class="preco_parcelado al-center"></h3>
                        <div class="">
                            <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                                <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                                <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                                <input type="hidden" 		name="id_produto" value = "11"/>
                                <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                            </form>
                            <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                            <div class="preco_parcelado al-center" ><font><b>6x</b> de R$ 16,63 nos cartões</font><img src=""></div>
                        </div>
                    </article>
                    <article class="box box-small produto">
                        <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_01.png"></a>
                        <h2 class="al-center"><a  href="produto/&p=11">Conjunto de Renda Lilas Fio Dental</a></h2>
                        <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                        <div class="preco al-center"><small>R$ 49,50</small></div>
                        <h3 class="preco_parcelado al-center"></h3>
                        <div class="">
                            <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                                <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                                <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                                <input type="hidden" 		name="id_produto" value = "11"/>
                                <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                            </form>
                            <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                            <div class="preco_parcelado al-center" ><font><b>6x</b> de R$ 16,63 nos cartões</font><img src=""></div>
                        </div>
                    </article>
                    <article class="box box-small produto">
                        <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_01.png"></a>
                        <h2 class="al-center"><a  href="produto/&p=11">Conjunto de Renda Lilas Fio Dental</a></h2>
                        <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                        <div class="preco al-center"><small>R$ 49,50</small></div>
                        <h3 class="preco_parcelado al-center"></h3>
                        <div class="">
                            <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                                <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                                <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                                <input type="hidden" 		name="id_produto" value = "11"/>
                                <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                            </form>
                            <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                            <div class="preco_parcelado al-center" ><font><b>6x</b> de R$ 16,63 nos cartões</font><img src=""></div>
                        </div>
                    </article>
                    
                    <article class="box box-small produto last">
                        <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_01.png"></a>
                        <h2 class="al-center"><a  href="produto/&p=11">Conjunto de Renda Lilas Fio Dental</a></h2>
                        <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                        <div class="preco al-center"><small>R$ 49,50</small></div>
                        <h3 class="preco_parcelado al-center"></h3>
                        <div class="">
                            <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                                <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                                <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                                <input type="hidden" 		name="id_produto" value = "11"/>
                                <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                            </form>
                            <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                            <div class="preco_parcelado al-center" ><font><b>6x</b> de R$ 16,63 nos cartões</font><img src=""></div>
                        </div>
                    </article>

                    <div class="clear"></div>
                </div>
            </section>
 </main>
