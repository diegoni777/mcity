@extends('template')
@section('contenido')

        <h5>Compras realizadas</h5>
        <table class="therichpost-table therichpost-striped therichpost-white">
          <tr>
          <td>foto</td>
              <td>Producto</td>
              <td>Precio</td>
              <td>cantidad</td>
              <td>Subtotal</td>
              <td>Total</td>
              
             </tr>

             @foreach($consulta as $consulta)
             <tr>
             <td><img src="{{ asset('archivos/'. $consulta->fotop)}}" alt="Product Image" width="100" heigth="100"></td>
                  <td>{{ $consulta->producto }}</td>
                  <td>{{ $consulta->precio}}</td>
                  <td>{{ $consulta->cantidad }}</td>
                  <td>{{ $consulta->sub_total}}</td>
                  <td>{{ $consulta->total}}</td>
                 
                  
                  
                  
             </tr>
             @endforeach

            
 
        </table>
      </div>
    </div>
  </div>


@stop