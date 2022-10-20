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
                                <li class="breadcrumb-item active">Ajouter Une personne</li>
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
            <h3 class="card-title">Modifier une Personnes</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('cvs/'.$personne->id)}}" METHOD="post" enctype="multipart/form-data" class="mt-3">
        <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="phase">Nom</label>
                    <input type="text" class="form-control" name="firstname" value="{{ $personne->firstname }}">
                </div>
                <div class="form-group">
                    <label for="phase">Prenom</label>
                    <input type="text" class="form-control" name="lastname" value="{{ $personne->lastname }}" >
                </div>
                <div class="form-group">
                    <label for="phase">Mail</label>
                    <input type="mail" class="form-control" name="mail" value="{{ $personne->mail }}" required="@">
                </div>
                <div class="form-group">
                    <label for="phase">Adresse</label>
                    <input type="text" class="form-control" name="adresse" value="{{ $personne->adresse }}">
                </div>
               <div class="form-group">
                    <label for="phase">Numero du Telephone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $personne->phone }}">
                </div>
                <div class="form-group">
                    <label for="phase">Photo</label>
                    <input type="file" class="form-control" name="image">
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