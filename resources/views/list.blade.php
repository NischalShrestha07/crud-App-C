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
            <div class="h3">LARAVEL 11 CRUD APPLICATION</div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-right mb-3">
                <a href="{{route('articles.add')}}" class="btn btn-primary">
                    <h4>ADD</h4>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-122">
                <div class="card">
                    <div class="card-header">
                        <h3>Article/List</h3>
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
                            <tr>
                                <td>1</td>
                                <td>Dummy</td>
                                <td>Narayan</td>
                                <td>2023-1-2</td>
                                <td><a href="" class="btn btn-primary">Edit</a></td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>

                            </tr>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>