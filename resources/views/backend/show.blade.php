@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show company {{$article->id}}</div>

                <div class="card-body">

                        <div class="form-group">
                            <label>title:{{$company->nama}}</label>
                        </div>
                        <div class="form-group">
                            <label>content:{{$company->title}}</label>
                        </div>
                        <div class="form-group">
                            <a href="{{route('index')}}" class="btn btn-secondary btn-lg btn-block">kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
