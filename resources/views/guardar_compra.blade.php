@extends('template')
@section('contenido')
<h2>Compras realizadas</h2>
<div class="therichpost-panel">
    <div class="therichpost-row-padding" style="margin:0 -16px">
      <div class="therichpost-third">
        <h5>CRUDS</h5>
        <img src="{{ asset('img/crud2.png') }}" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="therichpost-twothird">
        <h5>Vista de crud</h5>
        <table class="therichpost-table therichpost-striped therichpost-white">
          <tr>
           
              <td>ID</td>
              <td>Producto</td>
              <td>Precio</td>
              <td>cantidad</td>
              <td>Subtotal</td>
              <td>Total</td>
              <td>foto</td>
             </tr>

             @foreach($consulta as $consulta)
             <tr>
                  <td>{{ $consulta->id }}</td>
                  <td>{{ $consulta->producto }}</td>
                  <td>{{ $consulta->precio}}</td>
                  <td>{{ $consulta->cantidad }}</td>
                  <td>{{ $consulta->sub_total}}</td>
                  <td>{{ $consulta->total}}</td>
                  <td>{{ $consulta->fotop }}</td>
                  
                  
                  <td>
                      <a href="" >Detalle</a>
                     

                    <form name="borrar1" action="" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                            <input type="submit" value="Borrar">
                       </form>
                       
                  </td>
             </tr>
             @endforeach

            
 
        </table>
      </div>
    </div>
  </div>

@stop