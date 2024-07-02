<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add the Details.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
</head>
<style>
    h3 {
        font-family: cursive;
        font-size: 30px;
        font-weight: bold
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
                <a href="{{route('articles.show')}}" class="btn btn-primary">
                    <h4>BACK</h4>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-122">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h2 class="text-center">Article/List</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('articles.add')}}" method="post" name="addArticle">
                            @csrf {{--@csrf is use to stop the cross sided requests which is essential for secuirity
                            --}}
                            <div class="form-group mb-1">
                                <label for="">
                                    <h3>Title</h3>
                                </label>

                                {{-- {{old('title')}} shows back the past used datas used in value="" --}}
                                <input type="text " name="title" value="{{old('title')}}"
                                    class="form-control {{($errors->any() && $errors->first('title'))?'is-invalid':''}}">

                                {{-- shows the erorrs --}}
                                @if ($errors->any())
                                <p class="invalid-feedback">{{$errors->first('title')}}</p>

                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <label for="">
                                    <h3>Description</h3>
                                </label>
                                <textarea name="description"
                                    class="form-control {{($errors->any() && $errors->first('description'))?'is-invalid':''}}"
                                    id="description" cols="30" rows="10">{{old('description')}}</textarea>

                                {{-- shows the erorrs --}}
                                @if ($errors->any())
                                <p class="invalid-feedback">{{$errors->first('description')}}</p>

                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <label for="">
                                    <h3>Author</h3>
                                </label>
                                <input name="author" id="author"
                                    class="form-control {{($errors->any() && $errors->first('author'))?'is-invalid':''}}"
                                    value="{{old('author')}}">

                                {{-- shows the erorrs --}}
                                @if ($errors->any())
                                <p class="invalid-feedback">{{$errors->first('author')}}</p>

                                @endif
                            </div>
                            <button class="form-group mt-2 btn btn-primary" name='submit'>Save Article</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> ,

</body>

</html>