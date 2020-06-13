@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row justify-content-center mt-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card-header">投稿</div>
                        <div class="card-body text-right">
                            <form action="{{ url('/make')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <textarea required class="form-control" name="text" id="exampleFormControlTextarea1" rows=5></textarea>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <label>
                                    <span class="btn btn-outline-secondary">
                                        <input type="file" class="form-control" name="main_image" style="display:none" required>画像を選択
                                    </span>
                                </label>
                                <input type="submit" class="btn btn-secondary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</div>
@endsection
