@extends('base_layout.master_layout')
@extends('base_layout.master_layout')
@section('edit')

    <div class="row">

        <div class="col-lg-12">

            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-group ">

                    <div class="col-md-12">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                            <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>

                                                                <!-- food image -->
                                                                <input type="file" name="image"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>

                                <!-- validation image the erorr in controller-->
                                <span class="error">{{$errors->first('image')}}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name"> name</label>

                    <!-- food name  and the value from database   -->
                    <input type="name" class="form-control" name="name"  placeholder="name">
                    <span class="error">{{$errors->first('name')}}</span>
                </div>

                <div class="form-group">
                    <!-- food details value from database -->
                    <label for="details">details</label>
                    <input type="details" class="form-control" name="details" placeholder="details">
                    <span class="error">{{$errors->first('details')}}</span>
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>

    </div>

@endsection