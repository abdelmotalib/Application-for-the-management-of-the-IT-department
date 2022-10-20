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
                                <li class="breadcrumb-item active">tout les Phases</li>
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
              <div class="card-header">
                <h3 class="card-title">Liste Des Chercheurs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">id du chercheur</th>
                      <th>Role du chercheur</th>
                      <th>Nombre d'article publie</th>
                      <th>Domaine de recherche</th>
                      <th>Vacataire</th>
                      
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <tr>
                      <style>
                        .table-bordered a{
                         text-decoration: none;
                         width:100% !important;
                         cursor: pointer;
                         font-size: 15px;
                        }
                         button, input[type="submit"], input[type="reset"] {
	background: none;
	color: inherit;
	border: none;
	padding: 5px 18px !important;
	font: inherit;
	cursor: pointer;
}


                        .rachidbtn{
                          display: grid;
grid-auto-flow: row;
grid-row-gap: 5px
                          
                        }
                    
                      </style>
                    @foreach($listechercheur as $listechercheur)
                      <td>{{$listechercheur->id}}</td>
                      <td>{{$listechercheur->rolec}}</td>
                      <td>{{$listechercheur->article}}</td>
                      <td>{{$listechercheur->domaine}}</td>
                      <td>{{$listechercheur->vacataire}}</td>
                      <td class="rachidbtn">
                        <a href="{{ url('cvs/'.$listechercheur->id.'/editchercheur') }}" class="badge bg-success"><i class="far fa-eye"></i></a>
                                     <form class="badge bg-danger" action="{{ url('cvs/'.$listechercheur->id.'/deletechercheur')}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class=""><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                <!--     
                                     <a class="badge bg-success">edit</a><a class="badge bg-danger">delete</a></td>
                                    -->
                                  </tr>
                          @endforeach        
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
              </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
@endsection