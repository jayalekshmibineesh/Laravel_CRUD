@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
        <form action="{{ route('update',$data->id) }}" method="POST">
              @csrf
                <div class="form-outline mb-4">
                  <input type="text" name="name" class="form-control form-control-lg" value="{{$data->name}}" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" value="{{$data->email}}"class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" name="mobile" value="{{$data->mobile}}"class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Contact</label>
                </div>

                               
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">update</button>
                </div>

                        
              </form>

        </div>
    </div>
</div>

@endsection