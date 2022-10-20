@extends('layouts.admin')

@section('content')

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Modifier une équipe</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="">
        
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom de l'équipe</label>
                    <input value="" type="text" name="name" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter le Nom de l'équipe">
                </div>

                <div class="form-group">
                    <label>Chef d'équipe</label>
                    <select name="teamLeader_id" class="form-control">
                        <option>Sélectionner le chef d'équipe</option>

                            

                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Les membres de l'Equipe</label>

                   
                            <div class="form-check">
                                <input   value="" name="membres[]" class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        

                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</div>

@endsection