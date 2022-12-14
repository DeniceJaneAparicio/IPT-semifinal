@extends('base')

@section('content')
<div class="container">
    <h2>Delete Visitor?</h2> <br> <br> <br>
    <div class="buttons">
        <form action="{{url('/delete-vis/'.$visitor->id)}}" method="post">

            {{ method_field('DELETE')}}
            {{ csrf_field()}}
                <div class="form-group float-end">
                    <button href="" class="btn btn-secondary m-1" type="submit"> <i class="fa fa-check" aria-hidden="true"></i> &nbsp; Yes</button>
                    <a href="/" class="btn btn-secondary m-1">

                        <i class="fa fa-times" aria-hidden="true"></i> &nbsp; No</a>
                </div>
        </form>
    </div>

</div>
<style>
    .container{
        margin-top: 100px;
        display: grid;
        place-content: center;
    }
</style>
@endsection
