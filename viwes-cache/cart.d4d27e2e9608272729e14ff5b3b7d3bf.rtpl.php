<?php if(!class_exists('Rain\Tpl')){exit;}?><!--final do header-->
        <section class="container">
            <div class="content tabcarrinho">
                <h1 class="promocoes">Meu Carrinho</h1>
                
                <table>
                    
                    <tr class="al-center">
                        <th class="tg-yw4l">Produto</th>
                        <th class="tg-yw4l">Quantidade</th>
                        <th class="tg-yw4l">Remover</th>
                        <th class="tg-yw4l">Valor</th>
                        <th class="tg-yw4l">Total</th>
                    </tr>
                     <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
                    <tr class="al-rigth buttons_added">  
                        
                        <td class="al-left fotocarrinho"><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></td>                          
                        <td class="al-center ">
                            <input type="button" class="minus" value="-" onclick="window.location.href = '/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/minus'">
                            <input type="number" size="4" class="qtd_product" title="Qty" value="<?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" min="0" step="1">
                            <input type="button" class="plus" value="+" onclick="window.location.href = '/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add'">
                        </td>                        
                        <td class="al-center iconexcluir"><a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove"><img src="/res/site/imagens/excluir.png"></a></td>
                        <td class="al-center">R$ <?php echo formatPrice($value1["vlprice"]); ?></td>
                        <td class="al-center">R$ <?php echo formatPrice($value1["vltotal"]); ?></td>                        
                    </tr>
                    <?php } ?>
                </table>

            </div>
            <div class="content">
               
                    <div class="box box-full">
                         <form method="post" action="/cart/freight" >
                            <div class="box box-largefull caluloCep">
                                <ul>
                                    <li class="al-center cepTexto">Calcule frete para seu CEP abaixo:</li>
                                    <li class="cepInput fl-left"><input type="text" name="zipcode"></li>
                                    <li class="cepBtn fl-rigth"><input type="submit" value="Calcule o Cep"><img class="load fl-rigth" src="imagens/load.gif"/></li>
                                   <li class="fl-left cepTextoAtencao"><strong>Atenção:</strong> 
                                     O prazo começa a contar a partir da aprovação do pagamento.
                                   Os produtos podem ser entregues separadamente.</li>
                                </ul>
                            </div>
                        </form>                        
                        <div class="totalcarrinho fl-rigth last box-medium">
                            <ul>
                                <li class="al-center cepTexto">Carrinho</li>
                                <li class="fl-left totcor">Subtotal</li>
                                
                                <li class="al-rigth"><?php echo htmlspecialchars( $cart["vlsubtotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
                                
                                <li class="fl-left totcor">Prazo de Entrega</li>
                                <li class="al-rigth"><?php echo htmlspecialchars( $cart["nrdays"] + 4, ENT_COMPAT, 'UTF-8', FALSE ); ?> Dias</li>
                                <li class="fl-left totcor">Frete</li>
                                <li class="al-rigth"><?php if( ($cart["vltotal"] > 299) ){ ?> Frete Gratis <?php }else{ ?> R$ <?php echo formatPrice($cart["vlfreight"]); ?><?php } ?></li>
                                <li class="fl-left totcor">Cupom Desconto</li>
                                <li class="al-rigth"> - </li>
                                <li class="fl-left totcor">Total</li>
                                <li class="al-rigth totcor">R$ <?php echo formatPrice($cart["vltotal"]); ?></li>

                            </ul>

                        </div>
                        <div class="totalcarrinhocupom fl-left box-medium">

                            <ul>
                                <li class="al-center cepTexto">Cupom</li>
                            </ul>
                            <input class="inpCup fl-left" type="text"/>
                            <input class="inptBtn fl-rigth" type="submit" value="Validar"/>
                            <img class="load fl-rigth" src="imagens/load.gif"/>
                        </div>
                        <div class="finalizar box-large fl-rigth">
                            <input  class="btn btn-red bt fl-rigth btcomprar" type="submit" value="Comprar">
                            <input class="btn btn-red bt fl-rigth btcomprar" type="submit" value="Comprar Mais">
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="finalizar box-large">

                    </div>
                

        </section>
        <!--final do header-->
