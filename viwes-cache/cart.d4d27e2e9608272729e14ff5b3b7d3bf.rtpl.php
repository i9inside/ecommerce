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
                    <tr class="al-rigth">
                       
                        <td class="al-left fotocarrinho"><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></td>
                        <td class="al-center minus"><input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1"></td>
                        <td class="al-center iconexcluir"><a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove"><img src="/res/site/imagens/excluir.png"></a></td>
                        <td class="al-center">R$ <?php echo formatPrice($value1["vlprice"]); ?></td>
                        <td class="al-center">R$ <?php echo formatPrice($value1["vltotal"]); ?></td>
                    </tr>
                    <?php } ?>
                </table>
                
            </div>
            <div class="content">
                <form action="" method="">
                    <div class="box box-full">
                        <div class="box box-largefull caluloCep">
                            <ul>
                                <li class="al-center cepTexto">Simule o prazo de entrega e o frete para seu CEP abaixo:</li>
                                <li class="cepInput fl-left"><input type="text"></li>
                                <li class="cepBtn fl-rigth"><input type="submit" value="Calcule o Cep"><img class="load fl-rigth" src="imagens/load.gif"/></li>
                                <li class="fl-left cepTextoAtencao"><strong>Atenção:</strong> 
                                    O prazo começa a contar a partir da aprovação do pagamento.
                                    Os produtos podem ser entregues separadamente.</li>
                            </ul>

                        </div>
                        <div class="totalcarrinho fl-rigth last box-medium">
                            <ul>
                                <li class="al-center cepTexto">Carrinho</li>
                                <li class="fl-left totcor">1 Produto</li>
                                <li class="al-rigth">R$ 29,50</li>
                                <li class="fl-left totcor">Frete</li>
                                <li class="al-rigth">R$ 30,15 </li>
                                <li class="fl-left totcor">Cupom Desconto</li>
                                <li class="al-rigth">R$ 30,55 </li>
                                <li class="fl-left totcor">Total</li>
                                <li class="al-rigth totcor">R 31,90</li>

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
                </form>

        </section>
        <!--final do header-->