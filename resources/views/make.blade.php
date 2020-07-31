@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row justify-content-center mt-5">
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card-header">投稿</div>
                        <div class="card-body text-right">
                            <form action="{{ url('/make')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <label>
                                    <span class="btn btn-outline-secondary">
                                        <input type="file" class="form-control" name="main_image" style="display:none" required>写真を投稿
                                    </span>
                                </label>
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
                                <p class="text-center">コスメ</p>
                                <div class="container border-top">
                                <label>
                                    <span class="btn btn-outline-secondary my-1">
                                        <input type="file" class="form-control" name="fande" style="display:none">ファンデーション
                                    </span>
                                </label>
                                <label>
                                    <span class="btn btn-outline-secondary">
                                        <input type="file" class="form-control" name="base" style="display:none">下地
                                    </span>
                                </label>
                                <label>
                                    <span class="btn btn-outline-secondary">
                                        <input type="file" class="form-control" name="eyeliner" style="display:none">アイライナー
                                    </span>
                                </label>
                                <label>
                                    <span class="btn btn-outline-secondary">
                                        <input type="file" class="form-control" name="eyeshadow" style="display:none">アイシャドウ
                                    </span>
                                </label>
                                <label>
                                    <span class="btn btn-outline-secondary">
                                        <input type="file" class="form-control" name="shadow" style="display:none">シェーディング
                                    </span>
                                </label>
                                <label>
                                    <span class="btn btn-outline-secondary">
                                        <input type="file" class="form-control" name="etc" style="display:none">その他
                                    </span>
                                </label>
                                </div>
                                <input type="submit" class="btn btn-secondary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</div>
@endsection
