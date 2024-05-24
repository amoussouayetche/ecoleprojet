@extends('layouts.backend.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Enseignant <span style="font-size: 12px;color:#28a745">/ create</span> </h1>
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
        <form class="g-3 needs-validation" action="{{route('store_enseignat_admin')}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Nom de l'enseignant</label>
                    <input type="text" class="form-control" id="validationCustom02" name="nom"
                        placeholder="Nom de l'enseignant" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Prenom de l'enseignant</label>
                    <input type="text" class="form-control" id="validationCustom02" name="prenom"
                        placeholder="Prenom de l'enseignant" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Telephone de l'enseignant</label>
                    <input type="text" class="form-control" id="validationCustom02" name="tel"
                        placeholder="Telephone de l'enseignant" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Sexe de l'enseignant</label>
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
                    <label for="validationCustom01" class="form-label">Adresse de l'enseignant</label>
                    <input type="text" class="form-control" id="validationCustom02" name="adresse"
                        placeholder="Adresse de l'enseignant" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Email de l'enseignant</label>
                    <input type="text" class="form-control" id="validationCustom02" name="email"
                        placeholder="Email de l'enseignant" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Date Naissance de l'enseignant</label>
                    <input type="date" class="form-control" id="validationCustom02" name="date"
                        placeholder="Date Naissance de l'enseignant" required>
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
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Ecole</label>
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
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Cours</label>
                    <select  class="form-control" id="validationCustom02" name="cours" id="cours" required>
                        <option value="" selected disabled>Selectionné</option>
                        @foreach ($cours as $cours)                        
                        <option value="{{$cours->coursid}}">{{$cours->nom_cours}}</option>
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
                        type="submit">Enregistrer l'enseignant</button>
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
                <h6 class="m-0 font-weight-bold text-primary">Enseignant</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom Enseignat</th>
                                <th>Numero Enseignat</th>
                                <th>Date Embauche Enseignat</th>
                                <th> Ecole</th>
                                <th> Cours</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nom Responsable</th>
                                <th>Numero Responsable</th>
                                <th>Date Embauche Responsable</th>
                                <th> Ecole</th>
                                <th> Cours</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($enseignants as $enseignant)
                                <tr>
                                    <th scope="row">{{ $enseignant->id }}</th>
                                    <td>{{ $enseignant->name }} {{ $enseignant->prenom }}</td>
                                    <td>{{ $enseignant->telephone }}</td>
                                    <td>{{ $enseignant->date_embauche }}</td>
                                    <td>{{ $enseignant->nom_ecole }}</td>
                                    <td>{{ $enseignant->nom_cours }}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item enseignant-delete"
                                                    data-id="{{ $enseignant->id }}">
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
                                                @if ($enseignant->publie == 0)
                                                    <button class="dropdown-item enseignant-publie"
                                                        data-id="{{ $enseignant->id }}">
                                                        Publier
                                                        <div class="btn btn-success">
                                                            <i class="fas fa-check"></i>
                                                        </div>
                                                    </button>
                                                @else
                                                    <button class="dropdown-item enseignant-retirer"
                                                        data-id="{{ $enseignant->id }}">
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