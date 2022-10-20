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
            <h3 class="card-title">Ajouter Un Chercheur </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('ajouterchercheur')}}" METHOD="post" enctype="multipart/form-data" class="mt-3">
                {{ csrf_field() }}
            <div class="card-body">
            <div class="form-group">
            
            <select class="form-select" aria-label="Default select example" name="personne_id">
                <option selected name="personne_id">Choisir la Personnes a Ajoute</option>
                @foreach($pers as $peronnes )
                <option value="{{$peronnes->id}}">{{$peronnes->firstname}} {{$peronnes->lastname}}</option>
                @endforeach
            </select>
           </div>
                <div class="form-group">
                    <label for="phase">Role du chercheur </label>
                    <input type="text" class="form-control" name="rolec" placeholder="Professeur ou etudiant chercheur">
                </div>
                <div class="form-group">
                    <label for="phase">Domaine de recherche</label>
                    <input type="text" class="form-control" name="Domaine" placeholder="Domaine de recherche">
                </div>
                <div class="form-group">
                    <label for="phase">Vacataire</label>
                    <input type="mail" class="form-control" name="vacation" placeholder="uoui ou non" required="@">
                </div>
                <div class="form-group">
                    <label for="phase">Nombre d'article publie</label>
                    <input type="text" class="form-control" name="article" placeholder="nombre d'article publie">
                </div>
               <div class="form-group">
                    <label for="phase">abilitation</label>
                    <input type="text" class="form-control" name="abilitation" placeholder="oui ou non">
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