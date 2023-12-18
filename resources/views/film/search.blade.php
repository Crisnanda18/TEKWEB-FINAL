@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Search Film</div>

                <div class="card-body">
                    <form action="" method="">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="search" id="search" placeholder="Search here">
                            </div>                            
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>Sutradara</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
                
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    
   $(document).ready(function(){

    fetch_film();

    function fetch_film(query=''){
        $.ajax({
            url:"{{route('search.action')}}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data){
                $('tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        })
    }

    $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        fetch_film(query);
    });
   });
</script>


@endsection