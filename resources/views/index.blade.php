<!DOCTYPE html>
<html lang="">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    rel="stylesheet">
    </head>
    <body>
@extends('master')
@section('main')
        <div class="jumbotron">
            <div class="container">
                <h1>Hello, world!</h1>
                <p>Contents ...</p>
                <p>
                <a class="btn btn-primary btn-lg">Learn more</a>
                </p>
            </div>
        </div>

        <!-- <div class="jumbotron">
    <div class="container">
    <h1>Danh mục</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
            @foreach($categories as $cat)
                <tr>
                    <td>{{ $cat['id'] }}</td>
                    <td>{{ $cat['name'] }}</td>
                    <td>{{ $cat['status'] == 0 ? 'Tạm ẩn' : 'Hiển thị' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <hr>
    <div>
        {{ $categories->links() }}
    </div>
    </div>
    </div> -->

    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    @stop()
</html>