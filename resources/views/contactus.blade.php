<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4 style="color: red;">contact Us</h4><hr>

                <form action="{{route('send.email')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="enter your Name" value="{{ old('name') }}">
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="enter your email" value="{{ old('email') }}">
                        @error('email') <span class="text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="enter the mail subject" value="{{ old('subject') }}">
                        @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control"  cols="4" rows="4">{{old('message')}}</textarea>
                        @error('message') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <button class="btn btn-primary">send</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>