<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Employee</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('update-employee')}}">
                    @csrf
                    <input type="hidden" name='id' value="{{$data->id}}">
                    <div class="md3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$data->name}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$data->email}}">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Phone</label>
                        <input type="phone" class="form-control" name="phone" placeholder="Enter Phone" value="{{$data->phone}}">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Company</label>
                        <input type="company" class="form-control" name="company" placeholder="Enter company" value="{{$data->company}}">
                        @error('company')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">Salary</label>
                        <input type="salary" class="form-control" name="salary" placeholder="Enter salary" value="{{$data->salary}}">
                        @error('salary')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md3">
                        <label class="form-label">City</label>
                        <textarea class="form-control" name="city" placeholder="Enter city">{{$data->city}}</textarea>
                        @error('city')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('employee-list')}}" class="btn btn-danger">Back</a>
                </form>
        </div>
    </div>
</div>
</body>
</html>