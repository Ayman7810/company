@extends('admin.layout')

@section('title', __('shard.show-blog'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.show-blog') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{__('shard.title')}}</label>
                                <p  class="form-control">{{ $blog->title }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{__('shard.title_ar')}}</label>
                                <p  class="form-control">{{ $blog->title_ar }}</p>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{__('shard.description')}}</label>
                                <p >{{ $blog->description }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">{{__('shard.description_ar')}}</label>
                                <p >{{ $blog->description_ar }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="d-block">{{__('shard.image')}}</label>
                            <img width="10%"  src='{{  asset("storage/blogs/$blog->image") }}' alt="{{ $blog->name }}">
                         </div>
                        <div class="col-md-6">
                            <label for="" class="d-block">{{__('shard.select-category')}}</label>
                            <select class="custom-select" disabled name="category_id" id="custom-select">
                                <option value="{{ $blog->category->id }}" selected>{{ $blog->category->title }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                         </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
