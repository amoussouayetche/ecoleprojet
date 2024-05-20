@extends('layouts.backend.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Eleve <span style="font-size: 12px;color:#28a745">/ create</span> </h1>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
</div>
<div class="row">
    <div class="col-xl-12">
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
        <form class="g-3 needs-validation" action="{{route('store_eleve_admin')}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Nom eleve</label>
                    <input type="text" class="form-control" id="validationCustom02" name="nom"
                        placeholder="Nom eleve" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Prenom eleve</label>
                    <input type="text" class="form-control" id="validationCustom02" name="prenom"
                        placeholder="Prenom eleve" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Telephone eleve</label>
                    <input type="text" class="form-control" id="validationCustom02" name="tel"
                        placeholder="Telephone eleve" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Sexe eleve</label>
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
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Adresse eleve</label>
                    <input type="text" class="form-control" id="validationCustom02" name="adresse"
                        placeholder="Adresse eleve" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Email eleve</label>
                    <input type="text" class="form-control" id="validationCustom02" name="email"
                        placeholder="Email eleve" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Date Naissance eleve</label>
                    <input type="date" class="form-control" id="validationCustom02" name="date"
                        placeholder="Date Naissance eleve" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">classe</label>
                    <select  class="form-control" id="validationCustom02" name="classe" id="classe" required>
                        <option value="" selected disabled>Selectionné</option>
                        @foreach ($classes as $classe)                        
                        <option value="{{$classe->id}}">{{$classe->nomClasse}}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Nom parent</label>
                    <input type="text" class="form-control" id="validationCustom02" name="nomparent"
                        placeholder="Nom parent" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Prenom parent</label>
                    <input type="text" class="form-control" id="validationCustom02" name="prenomparent"
                        placeholder="Prenom parent" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Telephone parent</label>
                    <input type="text" class="form-control" id="validationCustom02" name="telparent"
                        placeholder="Telephone parent" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Sexe parent</label>
                    <select  class="form-control" id="validationCustom02" name="sexeparent" id="sexeparent" required>
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
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Adresse parent</label>
                    <input type="text" class="form-control" id="validationCustom02" name="adresseparent"
                        placeholder="Adresse parent" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Email parent</label>
                    <input type="text" class="form-control" id="validationCustom02" name="emailparent"
                        placeholder="Email parent" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Date Naissance parent</label>
                    <input type="date" class="form-control" id="validationCustom02" name="dateparent"
                        placeholder="Date Naissance parent" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-xl-3">
                    <label for="validationCustom01" class="form-label">Anne Scolaire</label>
                    <select  class="form-control" id="validationCustom02" name="annee" id="annee" required>
                        <option value="" selected disabled>Selectionné</option>
                        @foreach ($anneescolaire as $anneescolaire)                        
                        <option value="{{$anneescolaire->id}}">{{$anneescolaire->annee_scollaire}}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-3">
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
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align:end">
                    <button class="btn text-white" style="width: 100%;background:rgb(21, 199, 125)"
                        type="submit">Enregistrer l'eleve</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
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
                                <th>Nom Eleve</th>
                                <th>Prenom Eleve</th>
                                <th>Telephone Eleve</th>
                                <th>Email Eleve</th>
                                <th>Sexe Eleve</th>
                                <th>Classe</th>
                                <th>Annee Scolaire</th>
                                <th>Ecole</th>
                                <th>Nom Parent</th>
                                <th>Telephone Parent</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nom Eleve</th>
                                <th>Prenom Eleve</th>
                                <th>Telephone Eleve</th>
                                <th>Email Eleve</th>
                                <th>Sexe Eleve</th>
                                <th>Classe</th>
                                <th>Annee Scolaire</th>
                                <th>Ecole</th>
                                <th>Nom Parent</th>
                                <th>Telephone Parent</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($eleves as $eleve)
                                <tr>
                                    <th scope="row">{{ $eleve->eleve_id }}</th>
                                    <td>{{ $eleve->eleve_name }}</td>
                                    <td>{{ $eleve->eleve_prenom }}</td>
                                    <td>{{ $eleve->eleve_telephone }}</td>
                                    <td>{{ $eleve->eleve_email }}</td>
                                    <td>{{ $eleve->eleve_sexe }}</td>
                                    <td>{{ $eleve->classe_name }}</td>
                                    <td>{{ $eleve->annee_year }}</td>
                                    <td>{{ $eleve->nom_ecole }}</td>
                                    <td>{{ $eleve->parent_name }}</td>
                                    <td>{{ $eleve->parent_telephone }}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item eleve-delete"
                                                    data-id="{{ $eleve->id }}">
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
                                                @if ($eleve->publie == 0)
                                                    <button class="dropdown-item eleve-publie"
                                                        data-id="{{ $eleve->id }}">
                                                        Publier
                                                        <div class="btn btn-success">
                                                            <i class="fas fa-check"></i>
                                                        </div>
                                                    </button>
                                                @else
                                                    <button class="dropdown-item eleve-retirer"
                                                        data-id="{{ $eleve->id }}">
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
    </div>
</div>
    
@endsection