@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="css/bidangKeahlian/style.css">    
@endsection

@section('body')
    @include('sections.cardOpen')
        <div class="row mb-4 mt-2">
            <div class="col-6">
                <h5 class="card-title">Halaman Bidang Keahlian</h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end ">
                    <a class="btn btn-primary" href="/bidangKeahlian/create" role="button">Tambahkan Data</a>
                </div>
            </div>
        </div>
            <div style="max-height: 60vh; overflow-y:auto;">
                <div class="card-text me-3">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th class="th" scope="col">Nama Bidang Keahlian</th>
                                <th class="th" scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($bidangKeahlian as $bidkah)
                            <tr>
                              <td>{{$bidkah['namaBidangKeahlian']}}</td>
                              <td>
                                  <a href="/bidangKeahlian/update/{{$bidkah->id}}"><i class='bx bx-pencil tableAction'></i></a>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>
    @include('sections.cardClose')
@endsection

@section('js')
    <script type="text/javascript" src="js/bidangKeahlian/script.js"></script> 
@endsection
