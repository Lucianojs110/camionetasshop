
<section class="cart_area">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Productos</th>
                    <th scope="col"></th>
                    <th scope="col">Precio</th>
                    <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cantidad</th>
                    <th scope="col">Total</th>
                    <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acciones</th>
                    </tr>
                </thead>
                <tbody>
                {{-- <tbody>
                    <tr>


                    <td>
                        <div class="media">
                            <div class="d-flex">
                                <img src="img/cart.jpg" alt="">
                            </div>
                            <div class="media-body">
                            <p>Minimalistic shop for multipurpose use</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <h5>$360.00</h5>
                    </td>
                    
                    <td>
                        <div class="product_count">
                            <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                            <button onclick="if (!window.__cfRLUnblockHandlers) return false; var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                            <button onclick="if (!window.__cfRLUnblockHandlers) return false; var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                        </div>
                    </td>
                    <td>
                        <h5>$720.00</h5>
                    </td>

                    <td>
                        <h5>X</h5>
                    </td>

                    </tr>
                    
                    
                    
                </tbody> --}}
                @if(Session::has('cart'))
            @forelse ($products as $producto)
            <tr>
                  
                <td class="cart_description">
                    <h4><a href="">{{$producto['item']['descripcion']}}</a></h4>
                    <p>Categoria: {{$producto['item']['nombre']}}</p>
                </td>
                @foreach ($producto['item']->imagenprincipal as $img)
                    @if($loop->first)
                        <td class="cart_product">
                            <img src="{{ $img['ruta'] }}" alt="" style="height:110px;width:110px;">
                        </td>
                    @endif
                @endforeach
                
                <td class="cart_price">
                    <p>${{$producto['item']['precio']}}</p>
                </td>
                {{--     <td class="cart_quantity">
                        <a class="cart_quantity_up" title="Aumentar" href="{{route('product.anadiralcarro', ['id' => $producto['item']['id_repuesto']])}}"> + </a>
                            <input class="cart_quantity_input" type="text" name="quantity" value="{{$producto['cantidad']}}" autocomplete="off" size="2" disabled>
                            <a class="cart_quantity_down" title="Disminuir" href="{{route('product.removerunitemcarro', ['id' => $producto['item']['id_repuesto']])}}"> - </a>
                            
                    </td> --}}
                <td><div class="product_count">
                   {{--  <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty"> --}}
                    <a class="cart_quantity_up" title="Aumentar" href="{{route('product.anadiralcarro', ['id' => $producto['item']['id_repuesto']])}}"> + </a>
                            <input class="cart_quantity_input" type="text" name="quantity" value="&nbsp;&nbsp;&nbsp;&nbsp;{{$producto['cantidad']}}" autocomplete="off" size="2" disabled>
                            <a class="cart_quantity_down" title="Disminuir" href="{{route('product.removerunitemcarro', ['id' => $producto['item']['id_repuesto']])}}"> - </a>
                </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price">${{$producto['precio']}}</p>
                    {{-- <p class="cart_total_price">${{$producto['item']['precio']}}</p> --}}
                    
                </td>
                <td class="cart_delete">
                  <center> <a class="cart_quantity_delete" title="Eliminar del Carrito" href="{{route('product.removeritemcarro', ['id' => $producto['item']['id_repuesto']])}}"><i class="fa fa-times"></i></a></center>
                </td>
            </tr>
            @empty
                <tr>
                    <td>No hay productos en el carro de compras</td>
                </tr>
            @endforelse
            
        @else 
            <tr>
               <td>No hay productos en el carro de compras</td>
            </tr>
        @endif



                </tbody>
            </table>
        </div>
      </div>
    </div>
    <div class="col-md-10" align="right">  
        <tr class="cart_total_delivery">
            <td colspan="3" class="text-right">Total:</td>
            @if($products==null)
                <td> 0</td>
            
            @else
            <td colspan="2" class="price" id="total_shipping">${{$totalPrecio}}</td>
            @endif
            {{-- <td colspan="5" class="text-right">Cantidad de Productos:</td>
            <td colspan="4" class="price" id="total_shipping">${{$totalCantidad}}</td> --}}
            {{-- <td><a class="primary-btn" href="#">Finalizar Compra</a></td> --}}
        </tr>
    </div>

    </br>
    </br>

        {{-- <div class="row">
            <div class="col-xs-6" >
                <div class="center-block">    
                <a href="/prod" class="primary-btn" title="Agregar más Productos al Carrito">Seguir Comprando</a> 
                <a class="primary-btn" href="/checkout">Finalizar Compra</a>
                </div> 
            </div>
        </div> --}}

        <div class="row">
            <div class="col-lg-6 col-centrada">
                <a href="/prod" class="primary-btn" title="Agregar más Productos al Carrito">Seguir Comprando</a> 
                <a class="primary-btn" href="/checkout">Finalizar Compra</a>
            </div>
        </div>
            

        
            
        
        
</section>


  <style>
  .col-centrada{
    float: none;
    margin: 0 auto;
}
</style>