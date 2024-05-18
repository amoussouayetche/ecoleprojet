@extends('layouts.backend.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Responsable <span style="font-size: 12px;color:#28a745">/ create</span> </h1>
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
        <form class="g-3 needs-validation" action="{{route('store_responsable_admin')}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Nom du responsable</label>
                    <input type="text" class="form-control" id="validationCustom02" name="nom"
                        placeholder="Nom du responsable" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Prenom du responsable</label>
                    <input type="text" class="form-control" id="validationCustom02" name="prenom"
                        placeholder="Prenom du responsable" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Telephone du responsable</label>
                    <input type="text" class="form-control" id="validationCustom02" name="tel"
                        placeholder="Telephone du responsable" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Sexe du responsable</label>
                    <select  class="form-control" id="validationCustom02" name="sexe" id="sexe" required>
                        <option value="" selected disabled>Selectionné</option>
                        <option value="M">Masculin</option>
                        <option value="F">Feminin</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Adresse du responsable</label>
                    <input type="text" class="form-control" id="validationCustom02" name="adresse"
                        placeholder="Adresse du responsable" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Email du responsable</label>
                    <input type="text" class="form-control" id="validationCustom02" name="email"
                        placeholder="Email du responsable" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Date Naissance du responsable</label>
                    <input type="date" class="form-control" id="validationCustom02" name="date"
                        placeholder="Date Naissance du responsable" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Date Embauche</label>
                    <input type="date" class="form-control" id="validationCustom02" name="dateembauche"
                        placeholder="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-12">
                    <label for="validationCustom01" class="form-label">Adresse ecole</label>
                    <select  class="form-control" id="validationCustom02" name="ecole" id="ecole" required>
                        <option value="" selected disabled>Selectionné</option>
                        @foreach ($ecoles as $ecole)                        
                        <option value="{{$ecole->id}}">{{$ecole->nom_ecole}}</option>
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
                        type="submit">Enregistrer le responsable</button>
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
                <h6 class="m-0 font-weight-bold text-primary">Eleve</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom Responsable</th>
                                <th> Ecole</th>
                                <th>Numero Responsable</th>
                                <th>Date Embauche Responsable</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nom Responsable</th>
                                <th> Ecole</th>
                                <th>Numero Responsable</th>
                                <th>Date Embauche Responsable</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($responsableecoles as $responsableecole)
                                <tr>
                                    <th scope="row">{{ $responsableecole->id }}</th>
                                    <td>{{ $responsableecole->name }} {{ $responsableecole->prenom }}</td>
                                    <td>{{ $responsableecole->nom_ecole }}</td>
                                    <td>{{ $responsableecole->telephone }}</td>
                                    <td>{{ $responsableecole->date_embauche }}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item responsableecole-delete"
                                                    data-id="{{ $responsableecole->id }}">
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
                                                @if ($responsableecole->publie == 0)
                                                    <button class="dropdown-item responsableecole-publie"
                                                        data-id="{{ $responsableecole->id }}">
                                                        Publier
                                                        <div class="btn btn-success">
                                                            <i class="fas fa-check"></i>
                                                        </div>
                                                    </button>
                                                @else
                                                    <button class="dropdown-item responsableecole-retirer"
                                                        data-id="{{ $responsableecole->id }}">
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