@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row justify-content-center">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card-header">投稿</div>
                        <div class="card-body text-right">
                            <form action="{{ url('/make')}}" method="post" >
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <textarea required class="form-control" name="text" id="exampleFormControlTextarea1" rows=5></textarea>
                                </div>
                                <input type="submit" class="btn btn-outline-secondary"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</div>
@endsection
