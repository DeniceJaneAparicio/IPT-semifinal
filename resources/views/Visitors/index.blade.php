@extends('base')

@section('content')

<div class="container">
    @if ($info = Session::get('info'))



    @endif

        <div class="info bg-secondary w-25 text-white shadow-lg">
            <p> {{$info}} </p>
        </div>
<style>
    .info{
        font-size: 30px;
        text-align: center;
        border-radius:20px;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered" style="border: 1px solid rgba(43, 40, 40, 0.541);">
        <thead >
            <tr >
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Purpose</th>
                <th>TIme</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <div class="float-start mb-2">
            <a href="{{url('/visitors/create')}}" class="btn btn-success " style="padding-top: 20px; padding-bottom:20px;">
                <i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add Investor
            </a>
        </div>
        <tbody>
            <?php foreach ($visitors as $vis): ?>
            <tr>
                <td><?=$vis->id ?></td>
                <td><?=$vis->name ?></td>
                <td><?=$vis->phone ?></td>
                <td><?=$vis->purpose ?></td>
                <td><?=$vis->time ?></td>
                <td style="width: 10px;">
                    <a href="{{url('/edit-vis/' . $vis->id)}}"class="btn btn-secondary m-1" style="width: 100px;"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Edit</a>
                </td>
                <td style="width: 10px;">
                    <a href="{{url('/delete-vis/' . $vis->id)}}"class="btn btn-danger m-1" style="width: 100px;"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
</div>
@endsection
