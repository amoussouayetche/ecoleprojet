@extends('layouts.backend.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bulletin <span style="font-size: 12px;color:#28a745">/ show</span> </h1>
</div>
<div class="row">
    <div class="col-xl-5">
        <form class="g-3 needs-validation" action="" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Cours</label>
                    <select  class="form-control" id="validationCustom02" name="cours" id="cours" required>
                        <option value="" selected disabled>Selectionné</option>
                        @foreach ($annees as $annee)                        
                        <option id="option" onclick="displayBulletin();" value="{{$annee->id}}">{{$annee->annee_scollaire}}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-xl-7" style="display: none" id="displayBullettin" >
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Felicitation!</strong> {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (Session::get('fail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Echec!</strong> {{ Session::get('fail') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Evaluation</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cours Evalué</th>
                                <th>Classe</th>
                                <th>Date Evaluation</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Cours Evalué</th>
                                <th>Classe</th>
                                <th>Date Evaluation</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        {{-- <tbody>
                            @foreach ($evaluations as $evaluation)
                                <tr>
                                    <th scope="row">{{ $evaluation->id }}</th>
                                    <td>{{ $evaluation->nom_cours }}</td>
                                    <td>{{ $evaluation->nomClasse }}</td>
                                    <td>{{ $evaluation->date_evaluation }}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item evaluation-delete"
                                                    data-id="{{ $evaluation->id }}">
                                                    Supprimer
                                                    <div class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </div>
                                                </button>
                                                <a class="dropdown-item" href="">Modifier
                                                    <button class="btn btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                                @if ($evaluation->publie == 0)
                                                    <button class="dropdown-item evaluation-publie"
                                                        data-id="{{ $evaluation->id }}">
                                                        Publier
                                                        <div class="btn btn-success">
                                                            <i class="fas fa-check"></i>
                                                        </div>
                                                    </button>
                                                @else
                                                    <button class="dropdown-item evaluation-retirer"
                                                        data-id="{{ $evaluation->id }}">
                                                        Retirer
                                                        <div class="btn btn-danger">
                                                            <i class="fas fa-check"></i>
                                                        </div>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div></div>
@endsection
@section('js')
    <script>
        function displayBulletin() {
            let colone=document.getElementById('displayBullettin');
            console.log(colone);
            colone.setAttributes('style','display:block');
        }
    </script>
@endsection