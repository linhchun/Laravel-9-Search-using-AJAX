<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Laravel Search using AJAX - cairocoders</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");
body {
    background-color: #eee;
    font-family: "Poppins", sans-serif;
    font-weight: 300
}
.height {
    height: 100vh
}
.search {
    position: relative;
    box-shadow: 0 0 40px rgba(51, 51, 51, .1)
}
.search input {
    height: 60px;
    text-indent: 25px;
    border: 2px solid #d6d4d4
}
.search input:focus {
    box-shadow: none;
    border: 2px solid blue
}
.search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 50px;
    width: 110px;
    background: blue
}
</style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <h2 class="page-header text-center">Laravel 9 Search using AJAX</h2>
            <div class="search"> <i class="fa fa-search"></i> 
            <form class="navbar-form navbar-left" action="{{ URL::to('find') }}" method="POST">
                {{ csrf_field() }}
                    <input type="text" id="search" name="search" class="form-control" placeholder="Search Member" autocomplete="off">
                    <button type="submit" class="btn btn-primary">Search</button> 
            </form>
            </div>
             
            <div id="result" class="panel panel-default" style="display:none">
                <ul class="list-group" id="memList">
                 
                </ul>
            </div>
        </div>
         
        @yield('content')
         
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
    $('#search').keyup(function(){
        var search = $('#search').val();
        if(search==""){
            $("#memList").html("");
            $('#result').hide();
        }
        else{
            $.get("{{ URL::to('search') }}",{search:search}, function(data){
                $('#memList').empty().html(data);
                $('#result').show();
            })
        }
    });
});
</script>
</body>
</html>