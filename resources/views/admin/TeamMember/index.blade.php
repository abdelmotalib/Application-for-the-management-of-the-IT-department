@extends('layouts.admin')

@section('content')

<div class="col-md-6">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">


            <div class="form-group">
                <label for="inputStatus">Chercheur</label>
                <select id="inputStatus" class="form-control custom-select">
                    <option disabled="">Sélectionnez-en un</option>
                    <option>On Hold</option>
                    <option>Canceled</option>
                    <option>Success</option>
                </select>
            </div>


            <div class="form-group">
                <label for="inputStatus">Équipe</label>
                <select id="inputStatus" class="form-control custom-select">
                    <option disabled="">Sélectionnez-en un</option>
                    <option>On Hold</option>
                    <option>Canceled</option>
                    <option>Success</option>
                </select>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="col-md-6">

    <!-- /.card -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Membre des équipes</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Equipe</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Functional-requirements.docx</td>
                        <td>49.8005 kb</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>UAT.pdf</td>
                        <td>28.4883 kb</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Email-from-flatbal.mln</td>
                        <td>57.9003 kb</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Logo.png</td>
                        <td>50.5190 kb</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Contract-10_12_2014.docx</td>
                        <td>44.9715 kb</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>

<div class="col-12 mt-2 mb-3">
    <a href="#" class="btn btn-secondary">Cancel</a>
    <input type="submit" value="Save Changes" class="btn btn-success float-right">
</div>

@endsection