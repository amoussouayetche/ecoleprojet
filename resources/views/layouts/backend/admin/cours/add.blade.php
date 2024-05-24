@extends('layouts.backend.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cours <span style="font-size: 12px;color:#28a745">/ create</span> </h1>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
</div>
<div class="row">
    <div class="col-xl-5">
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
        <form class="g-3 needs-validation" action="{{route('store_cours_admin')}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-xl-12">
                    <label for="validationCustom01" class="form-label">Nom Cours</label>
                    <input type="text" class="form-control" id="validationCustom02" name="nomcours"
                        placeholder="Nom cours" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-12">
                    <label for="validationCustom01" class="form-label">classe</label>
                    <select  class="form-control" id="validationCustom02" name="classe" id="classe" required>
                        <option value="" selected disabled>Selectionné</option>
                        @foreach ($classes as $classe)                        
                        <option value="{{$classe->classeid}}">{{$classe->nomClasse}}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align:end">
                    <button class="btn text-white" style="width: 100%;background:rgb(21, 199, 125)"
                        type="submit">Enregistrer le cours</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-xl-7">
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
                <h6 class="m-0 font-weight-bold text-primary">Cours</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cours</th>
                                <th>Classe</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Cours</th>
                                <th>Classe</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($cours as $cours)
                                <tr>
                                    <th scope="row">{{ $cours->coursid }}</th>
                                    <td>{{ $cours->nom_cours }}</td>
                                    <td>{{ $cours->nomClasse }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item cours-delete"
                                                    data-id="{{ $cours->id }}">
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
                                                @if ($cours->publie == 0)
                                                    <button class="dropdown-item cours-publie"
                                                        data-id="{{ $cours->id }}">
                                                        Publier
                                                        <div class="btn btn-success">
                                                            <i class="fas fa-check"></i>
                                                        </div>
                                                    </button>
                                                @else
                                                    <button class="dropdown-item cours-retirer"
                                                        data-id="{{ $cours->id }}">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div></div>
    
@endsection