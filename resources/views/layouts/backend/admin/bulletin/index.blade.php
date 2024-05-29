@extends('layouts.backend.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bulletin <span style="font-size: 12px;color:#28a745">/ voir</span> </h1>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
</div>
<div class="row">
    <div class="col-xl-4">
        <form class="g-3 needs-validation" action="" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-xl-6">
                    <label for="validationCustom01" class="form-label">Cours</label>
                    <select  class="form-control" onchange="displayBulletin();"  id="validationCustom02" name="cours" id="cours" required>
                        <option value="" selected disabled>Selectionné</option>
                        @foreach ($annees as $annee)                        
                        <option id="option" value="{{$annee->id}}">{{$annee->annee_scollaire}}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-xl-8" style="display: none" id="displayBullettin">
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
                <h6 class="m-0 font-weight-bold text-primary">Bulletin</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Cours Evalué</th>
                                <th>Note</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tfoot>
                            @php
                                $colone=$notes->pluck('note');
                                $sum= $colone->sum();
                                $count= $colone->count();
                                $moyenne=($count>0)?$sum/$count : 0;
                            @endphp
                            <tr>
                                <th colspan="2">Total</th>
                                <th>{{$sum}}</th>
                            </tr>
                            <tr>
                                <th colspan="2">Moyenne</th>
                                <th>{{$moyenne}}</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($notes as $note)
                                <tr>
                                    <td>{{ $note->nom_cours }}</td>
                                    <td>{{ $note->note }}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item note-delete"
                                                    data-id="{{ $note->id }}">
                                                    Réclamer
                                                    <div class="btn btn-danger">
                                                        <i class="fas fa-edit"></i>
                                                    </div>
                                                </button>
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
@section('js')
    <script>
        function displayBulletin() {
            let colone=document.getElementById('displayBullettin');
            colone.setAttribute('style','display:block')
        }
    </script>
@endsection