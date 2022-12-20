@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Ventas</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Venta</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('sales/' .$sales->id)}}" method="POST">
                {!!csrf_field()!!}
                @method("PATCH")
                <label for=""> Estado de la Venta:</label>
                <div class="form-group" type="text" aria-placeholder="{{$sales->status}}" value="{{$sales->status}}" name="status" id="status">
                    <select  value="{{$sales->status}}" name="status" id="status"  class="form-control">
                        <option value="Pendiente de pago">Pendiente de pago</option> 
                        <option value="Pagado">Pagado</option> 
                        <option value="Empacado">Empacado</option> 
                        <option value="Enviado">Enviado</option> 
                        <option value="Recibido">Recibido</option> 
                    </select>
                </div>
                <label for=""> Fecha:</label>
                <input class="form-control" type="num" value="{{$sales->date}}" name="date" id="date">
                <label for="">Cliente</label>
                <select id="clients_id" name="clients_id" value="{{$sales->clients?->name}}" class="form-control">
                    @endforeach
                </select>
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>