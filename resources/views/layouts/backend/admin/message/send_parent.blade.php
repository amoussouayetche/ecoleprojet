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
            <form class="g-3 needs-validation" action="{{ route('store_message_responsable_admin') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
                    <div class="col-xl-12">
                        <label for="validationCustom01" class="form-label">Responsable</label>
                        <select class="form-control" id="validationCustom02" name="responsable" id="responsable" required>
                            <option value="" selected disabled>Selectionné</option>
                            @foreach ($responsables as $responsable)
                                <option value="{{ $responsable->responsable_id }}"> Responsable : {{ $responsable->responsable_name }}
                                    {{ $responsable->responsable_prenom }} || Eleve : {{ $responsable->eleve_name }}</option>
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

            <!-- Earnings (Monthly) Card Example -->
            @foreach ($messages as $message)
            <a href="{{route('show_message',['id'=>$message->courrierId])}}" style="text-decoration: none">
                <div class="col-xl-8 col-md-11 mb-4 mt-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        {{ $message->parent_name }} || {{ $message->parent_prenom }}</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ strln($message->message,0,10) }}...</div>
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
