@extends('layouts.backend.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Message <span style="font-size: 12px;color:#28a745">/ create</span> </h1>
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
            <form class="g-3 needs-validation" action="{{ route('store_message_parent_admin') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
                    <div class="col-xl-12">
                        <label for="validationCustom01" class="form-label">Parent</label>
                        <select class="form-control" id="validationCustom02" name="parents" id="parents" required>
                            <option value="" selected disabled>Selectionné</option>
                            @foreach ($parents as $parent)
                                <option value="{{ $parent->parent_users_id }}"> Parent : {{ $parent->parent_name }}
                                    {{ $parent->parent_prenom }} || Eleve : {{ $parent->eleve_name }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-12">
                        <label for="validationCustom01" class="form-label">Message</label>
                        <textarea class="form-control" id="validationCustom02" name="message" id="" cols="30" rows="10" required>Votre messaage</textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align:end">
                        <button class="btn text-white" style="width: 100%;background:rgb(21, 199, 125)"
                            type="submit">Enregistrer la message</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-7" style="height: 500px;overflow:scroll">
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
{{-- 
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Note</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom parents</th>
                                    <th>Message envoyé/th>
                                    <th>statut</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nom parents</th>
                                    <th>Message Envoyé</th>
                                    <th>statut</th>
                                    <th>Options</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <th scope="row">{{ $message->id }}</th>
                                        <td>{{ $message->courriers_expéditeur_users_id }}</td>
                                        <td>{{ $message->courriers_expéditeur_users_id }}</td>
                                        <td>{{ $message->courriers_expéditeur_users_id }}</td>

                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item message-delete"
                                                        data-id="{{ $message->id }}">
                                                        Supprimer
                                                        <div class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </div>
                                                    </button>
                                                    <a class="dropdown-item" href="">Lire
                                                        <button class="btn btn-primary">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>

                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
            <!-- Earnings (Monthly) Card Example -->
            @php
               $color=[

               ] 
            @endphp
            @foreach ($messages as $message)
            <a href="{{route('show_message',['id'=>$message->courrierId])}}" style="text-decoration: none">
                <div class="col-xl-8 col-md-11 mb-4 mt-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        {{ $message->parent_name }} || {{ $message->parent_prenom }}</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $message->message }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

@endsection
