<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud App laravel 11</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
</head>

<style>
    .cursive {
        font-family: cursive
    }
</style>

<body class="bg-light">
    <div class="p-3  bg-dark text-white py-3 ">
        <div class="container">
            <div class="h3 text-center">LARAVEL 11 CRUD APPLICATION</div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-right mb-3">
                <a href="{{route('articles.add')}}" class="btn btn-success">
                    <h4>ADD</h4>
                </a>
            </div>

            {{--below code is use to show the alert that the "datas are saved successfully" both of the codes are
            working use any one of them. preferr below:

            @if (Session::has('success'))
            <div class="col-md-12">
                <div class="alert alert-success">{{Session::get('success')}}</div>
            </div>
            @endif --}}
            {{------------------------------------------------------------ --}}
            @if (@session()->has('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            {{-- ------------------------------------------------------------- --}}


        </div>
        <div class="row">
            <div class="col-md-122">
                <div class="card">
                    <div class="card-header bg-primary text-white ">
                        <h2 class="text-center">Article/List</h2>
                    </div>
                    <div class="card-body">
                        <table class=" table">
                            <thead class="bg-dark text-white">
                                <tr class="cursive">
                                    <th class="h5 ">ID</th>
                                    <th class="h5 ">Title</th>
                                    <th class="h5 ">Author</th>
                                    <th class="h5 ">Created</th>
                                    <th class="h5 ">Edit</th>
                                    <th class="h5 ">Delete</th>
                                </tr>
                            </thead>
                            @if ($articles)
                            @foreach ($articles as $article)
                            <tr>
                                {{-- <td>1</td>
                                <td>Dummy</td>
                                <td>Narayan</td>
                                <td>2023-1-2</td>
                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                <td><a href="" class="btn btn-danger">Delete</a></td> --}}
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->author}}</td>
                                <td>{{$article->created_at}}</td>
                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>

                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6">Articl not added yet.</td>
                            </tr>
                            @endif

                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>