@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Productos</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Producto</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('products/' .$products->id)}}" method="POST">
                {!!csrf_field()!!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$products->id}}" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for="">Producto</label>
                <label for="">Categoria</label><br>
                <select id="categories_id" name="categories_id" class="form-control">
                    <option value="{{$products->categories_id}}">{{$products->categories->category}}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->id }} -> {{ $category->category }} </option>
                    @endforeach
                </select>
                
                
                
                    <button type="submit" class="btn btn-primary m-3" value="update">Guardar</button>

                </div>
            </form>
            </div>
        </div>