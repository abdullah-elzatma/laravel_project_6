@extends('base_layout.master_layout')
@section('show')

    <table class="table table-bordered table-striped table-condensed flip-content">
        <tr>
            <th>food image</th>
            <th>food name</th>
            <th>food details</th>
            <th>action</th>

        </tr>

<!-- loop -->
        <tr>
            <!-- image from database or save the image in file public/image -->
            <td><img src="image/boor.jpg"></td>
            <td>hh</td>
            <td>hh gfgd g yks gssiyu ufg fus gd gst dt hry hdr hrdy drj</td>

            <!-- send post route link and food id which edit it -->
            <td style="text-align: center"> <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i> </a>
                <a class="btn btn-danger" href="#"><i class="fa fa-trash"></i> </a>

            </td>

        </tr>


    </table>

@endsection
