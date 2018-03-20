<?php if(!class_exists('Rain\Tpl')){exit;}?><main>
    <section class="container "> 
        <div class="content">
            <h1 class="promocoes"><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
            <article class="box box-small produto">
                <a href="produto/&p=11"><img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></a>
                <h2 class="al-center"><a  href="/products<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>
                <p class="al-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna aliquam erat volutpat.</p>
                <div class="preco al-center"><small>R$ <?php echo formatPrice($value1["vlprice"]); ?></small></div>
                <h3 class="preco_parcelado al-center"></h3>
                <div class="">
                    <form id="form1" name="frmcarrinho" method="post" action="carrinho">
                        <input name="txt_preco" 	type="hidden" id="txt_preco" value = "9020.00" />
                        <input name="txt_qtde" 		type="hidden" id="txt_qtde" value = "1" />
                        <input type="hidden" 		name="id_produto" value = "11"/>
                        <input class="btn btn-red bt radius" type="submit" 		name="imageField" value="Comprar"  />
                    </form>
                    <div class="frete al-center"><b >FRETE </b><b class="al-center">GRÁTIS</b></div>
                    <div class="preco_parcelado al-center" ><font><b>6x</b> de 16,63 nos cartões</font><img src=""></div>
                </div>
            </article>
            <?php } ?>
            <div class="clear"></div>
            <!--bloco produto-->
        </div> 
        <div class="content">
            <ul class="paginator">  
                <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>          
                <li><a href="<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["page"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>  
                <?php } ?>              
            </ul>
        </div>
      
    </section>
    <section class="container "> 
        <div class="content">
            <h1 class="promocoes">Ofertas</h1>
            <article class="box box-small produto">
                <a href="produto/&p=11"><img src="/res/site/imagens/Produtos/p_02.png"></a>
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
                    <div class="preco_parcelado al-center" ><font><b>6x</b> de 16,63 nos cartões</font><img src=""></div>
                </div>
            </article>

            <div class="clear"></div>
            <!--bloco produto-->
        </div> 
    </section>
</main>
