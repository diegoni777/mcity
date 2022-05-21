@extends('template')
@section('contenido')

   
                    <?php 
            $sessionusuario=session('sessionusuario');
        ?>
       <p>  <?php echo $sessionusuario?> </p>
     
        <!-- Top bar End -->
        


        <nav class="nav justify-content-end">
            @if(session('carrito'))
                <a class="nav-link" href="{{url('carrito')}}">
                El carrito contenido: {{count(session('carrito'))}}Articulos
                </a>
            @else
                <a  class="nav-link" href="#">
                    El carrito contenido: 0 articulos
                </a>
            @endif
        </nav>

            @if($message=Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
            @endif
            <h2>Carrito de compras</h2>
            <!----------------------------------------------------->
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Producto</th>
                            <th style="width:10%">precio</th>
                            <th style="width:8%">Cantidad</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%">Otros</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                        @if(session('carrito'))
                        @foreach(session('carrito') as $idp=>$datos)
                            <?php $total += $datos['precio'] * $datos['cantidad'] ?>
                            <form action="{{ route ( 'guardar_compra' )}}" method="POST" enctype = 'multipart/form-data'>
                    {{ csrf_field() }}
                                    <tr>
                                    <td data-th="Producto">
                                        
                                            
                                                <div class="col-sm-3 hidden-xs">
                                                    <input type="text"  style="width:270px; background:none; border:none; outline:0; font-family:Arial, Helvetica, sans-serif; margin:0; padding:0;" name="fotop" value="{{$datos['fotop']}}" id="">
                                                    <img src="{{asset('archivos/'.$datos['fotop'])}}" width="100"  name="fotop" height="100" class="img-responsive" alt="">
                                                </div>
                                            <div class="col-sm-9">
                                                <h4 class="nomargin" name="producto">
                                                    <input type="text" style="width:270px; background:none; border:none; outline:0; font-family:Arial, Helvetica, sans-serif; margin:0; padding:0;" name="producto" value="{{$datos['producto']}}" id=""> </h4>
                                            </div>
                                    </td>
                                        <td data-th="precio">
                                            <input type="text" name="precio" value="${{$datos['precio']}}" class="form-control quantity">    </td>
                                        <td data-th="Cantidad">
                                        <input type="number" value="{{$datos['cantidad']}}" min="1" name="cantidad" class="form-control quantity">
                                    </td>
                                    <td data-th="Subtotal" class="text-center">
                                        <input type="text" name="sub_total" value="{{$datos['precio']*$datos['cantidad']}}" class="form-control quantity"></td>
                                        <td data-th="Otros" class="actions">
                                        
                                        <button class="btn btn-danger btn-sm delete-cart" name="id" data-id="{{ $idp}}">
                                                        <i class="fa fa-trash"></i>    
                                        </button>   
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                            <tfoot>
                                <tr class="visible-xs">
                                    <td class="text-center"><strong>
                                        <input type="text" name="total" style="width:270px; background:none; border:none; outline:0; font-family:Arial, Helvetica, sans-serif; margin:0; padding:0; font-size: 0px;" value="{{$total}}" class="form-control quantity"></strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{url('tablap')}}" class="btn btn-warning">
                                            <i class="fa fa-shopping-cart "> Seguir Comprando</i>
                                        </a>
                                    </td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-xs-text-center"><strong>Total: ${{$total}}</strong></td>
                                    <td>
                                        <button  class="btn btn-warning">
                                        
                                                <i class="fa fa-money  "> Confirmar compra</i>
                                            
                                        </button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    <!------------------------------>
                <!--</form> -->

                <style>
                    .border{
                        border: 0;
                    }
                    .fondo{
                        background: white;
                    }
                </style>

     

@stop