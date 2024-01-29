@extends('adminlte::page')

@section('title', 'Dashboard')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
@stop

@section('content_header')
<div class="col-12">
<div class="card" style="background-color: #ebebeb">
    <div class="car-body">
        @role('admin')<a class="btn btn-success" style="margin: 5px" href="{{route('equipo.create')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2-fill" viewBox="0 0 16 16">
            <path d="M12 2h-2v3h2z"/>
            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1"/>
          </svg></a> @endrole
<table id="equipo"  class="display table table-striped responsive" width="100%" >
    <thead class="thead-dark  text-sm-start" style="align-content: space-around">
        <tr>
            <th class= "display"><h1 style="font-size: 15px ">ID</h1></th>
            <th class="display"><h1 style="font-size: 15px">Tipo de equipo</h1></th>
            <th class="display"><h1 style="font-size: 15px">Direccion ip</h1></th>
            <th class="display"><h1 style="font-size: 15px">Modelo</h1></th>
            <th class="display"><h1 style="font-size: 15px">Marca</h1></th>
            <th class="display"><h1 style="font-size: 15px">Serial</h1></th>
            <th class="display"><h1 style="font-size: 15px">Direccion Mac</h1></th>
            <th class="display"><h1 style="font-size: 15px">Perifericos y Marcas</h1></th>
            <th class="display"><h1 style="font-size: 15px">Usuario</h1></th>
            <th  class="display"><h1 style="font-size: 15px">Oficina</h1></th>
            @role('admin')<th style="font-size: 25px" class="display"><h1 style="font-size: 15px">Editar</h1></th> @endrole
            @role('admin')<th style="font-size: 25px" class="display"><h1 style="font-size: 15px">Eliminar</h1></th> @endrole
        </tr>
    </thead>

    <tbody class="text-center">
        @forelse ($equipos as $equipo)
        <tr>
            <td>{{ $equipo->id}}</td> 
            <td>{{ $equipo->titulo}}</td>
            <td>{{ $equipo->direccion_ip}}</td>
            <td>{{ $equipo->modelo}}</td>
            <td>{{ $equipo->marca}}</td>
            <td>{{ $equipo->serial}}</td>
            <td>{{ $equipo->direccion_mac}}</td>
            <td>{{ $equipo->componentes_marcas}}</td>
            <td>{{ $equipo->usuario}}</td>
            <td>{{ $equipo->oficina}}</td>
            <td>
                @role('admin')<a class="btn btn-warning" style="margin: 5px" href="{{route('equipo.edit', $equipo->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                  </svg></a> @endrole</td>
                    <td>
                <form method="POST" action="{{route('equipo.destroy', $equipo->id)}}">
                    @csrf
                    @method('DELETE')
                    @role('admin')<button class="btn btn-danger" style="margin: 5px" type="submit" value="Borrar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                      </svg></button>@endrole
                </form>
              </td>
            @empty
            @endforelse
        </tr>
    </tbody>
</table>
</div>
</div>
</div>
  
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css"></script>
<script>
   new DataTable('#equipo', {
    responsive: true,
    columnDefs:[{orderable: false, target:[1,2,3,4,5,6,7,8,9,10,11]}],
    autoWidth: false,
    responsive:true,
    columnDefs: [
        { responsivePriority: 1, targets: 10 },
        { responsivePriority: 2, targets: 11 }
    ],
    "language": {
            "lengthMenu": "Mostrar"+ `
            <select class="custom-select custom-select-sm dorm-control-sm">
                <option value= '1'>1</option>
                <option value= '5'>5</option>
                <option value= '8'>10</option>
                <option value= '10'>10</option>
                <option value= '25'>25</option>
                <option value= '50'>50</option>
                <option value= '100'>100</option>
                <option value= '-1'>ALL</option>
            </select>
            `  +"registro por pagina",
            "zeroRecords": "Ingrese datos",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)",
            'search': 'Buscar:',
            'paginate': {
                'next': 'Siguiente',
                'previous': 'Anterior'
            }
        }
       
});
</script>
@stop