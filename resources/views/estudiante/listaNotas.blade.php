<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Actividad</th>
            <th>Nota</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($sqlNota as $item)
          <tr>
          <td scope="row">{{$item->nombre}}</td>
          <td>{{$item->nota}}</td>
            <td>
                @if($item->nota>4)
                 {{'QBE'}}
                @else($item->nota<4)
                  {{'FEM'}}
                @endif
        </td>
        </tr>    
          @endforeach  
          
            
        </tbody>
</table>