@extends('layouts.admin')

@section('content')


<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Phase</a></li>
                                <li class="breadcrumb-item active">Ajouter Un chercheur</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

<style>
@media (min-width: 750px){
    .col-md-12{
max-width: 70%;

    }/*
    .card-header{
        background-color: #F3F5F8 !important;
    }
    .card{
        background-color: #F3F5F8 !important;
    }*/
}
</style>      
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Modifier un Chercheur </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('chercheur/'.$chercheur->id)}}" METHOD="post" enctype="multipart/form-data" class="mt-3">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
            <div class="card-body">
          
                <div class="form-group">
                    <label for="phase">Role du chercheur </label>
                    <input type="text" class="form-control" name="rolec" value="{{$chercheur->rolec}}">
                </div>
                <div class="form-group">
                    <label for="phase">Domaine de recherche</label>
                    <input type="text" class="form-control" name="Domaine" value="{{$chercheur->domaine}}">
                </div>
                <div class="form-group">
                    <label for="phase">Vacataire</label>
                    <input type="mail" class="form-control" name="vacation" placeholder="oui ou non" value="{{$chercheur->vacataire}}" >
                </div>
                <div class="form-group">
                    <label for="phase">Nombre d'article publie</label>
                    <input type="text" class="form-control" name="article" value="{{$chercheur->article}}">
                </div>
               
                

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>

@endsection