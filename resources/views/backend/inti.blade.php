@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Company</div>

                <div class="card-body">
                    <div class="form-group">
                    <a href="{{route('create')}}" class="btn btn-success btn-lg btn-block">Tambah article</a>
                </div>
                   <table class="table table-striped table-bordered">
                       <thead>
                           <tr>
                               <th>No</th>
                               <th>Nama</th>
                               <th>Title</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                           @if (count($Company)<=0)
                           <tr>
                               <td colspan="4">
                                   <center>
                                       <b>Tidak ada Article</b>
                                   </center>

                               </td>
                            </tr>
                               
                           @endif
                           @foreach ($Company as $key=>$value)
                           <tr>
                               <td>{{$key+1}}</td>
                               <td>{{$value->nama}}</td>
                               <td>{{$value->title}}</td>
                               <td>
                                   <a href="{{route('show',$value->id)}}" class="btn btn-primary">Lihat</a>
                                   <a href="{{route('edit',$value->id)}}" class="btn btn-warning">Edit</a>
                                   <a href="{{route('destroy',$value->id)}}" class="btn btn-danger">Hapus</a>
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
