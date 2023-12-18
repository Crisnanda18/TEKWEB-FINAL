@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

<div class="container">
    <div class="row">
    </div>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category List</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:80%;">Name</th>
                                
                                <th style="width:20%;">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $row)
                            <tr>
                                <td>{{ $row->nama }}</td>
                                <td>
                                    <a href="{{ route('kategori.show',['id'=>$row->id]) }}" class="btn btn-sm btn-success">Detail</a>
                                    @if(Auth::user() && Auth::user()->is_admin)
                                    <a href="{{ route('kategori.edit',['id'=>$row->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" onclick="deleteData('{{ route('kategori.destroy',['id'=>$row->id]) }}')" class="btn btn-sm btn-danger">Hapus</a>
                                    @endif 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="d-flex justify-content-center align-items-center">
        <div class=" mt-3">
            @if(Auth::user() && Auth::user()->is_admin)
            <a href="{{ route('kategori.create') }}" class="btn cat btn-sm">Add Categories</a>
            @endif
            <a href="{{ route('film.index') }}" class="btn btn-warning btn-sm">Back</a>
        </div>
    </div>
   
</div>
<form action="" method="POST" id="form-delete">
    @csrf
    @method('DELETE')
</form>
@endsection

@section('script')
<script>
    function deleteData(url){
        var cek=confirm('Are you sure you want to delete this data?');
        if(cek){
            $('#form-delete').attr('action',url);
            $('#form-delete').submit();
        }
    }
</script>
<script>
  $(function () {
    $(".table").DataTable();
  });
</script>
  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
@endsection