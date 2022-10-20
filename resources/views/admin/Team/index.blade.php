@extends('layouts.admin')

@section('content')

<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Teams</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0" style="display: block;">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Team Name
                        </th>
                        <th style="width: 30%">
                            Team Members
                        </th>
                        <th>
                            Project
                        </th>

                        <th style="width: 30%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                        
                        </td>
                        
                        <td>
                            <ul class="list-inline">
                            
                            
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar"
                                            src="https://github.githubassets.com/images/mona-loading-default.gif">
                                    </li>
                            
                            </ul>
                        </td>
                        <td class="project_progress">
                        
                        </td>
                        <td class="project-actions text-right">

                        <form style="display: contents;" method="get" action="">
                            <button type="submit" class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </button>
                        </form>

                            <form style="display: contents;" method="DELETE" action="">
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>
                        
                        </form>
                            
                        </td>
                    </tr>
                

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

</div>

@endsection