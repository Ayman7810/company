@extends('admin.layout')

@section('title', __('shard.create'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.create-project') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.title') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.title') }}"
                                        name="title" class="form-control" value="{{ old('title') }}">
                                    <x-error-form name="title"></x-error-form>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.title_ar') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.title_ar') }}"
                                        name="title_ar" class="form-control" value="{{ old('title_ar') }}">
                                    <x-error-form name="title_ar"></x-error-form>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.select-category') }}</label>
                                    <select class="custom-select" name="category_id" id="custom-select">
                                        <option>{{ __('shard.select-category') }}</option>
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <x-error-form name="category_id"></x-error-form>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="custom-file form-group">
                                    <label for="">{{ __('shard.image') }}</label>
                                    <input type="file" id="example-fileinput" name="image" class="form-control"
                                        value="{{ old('title') }}">
                                    <x-error-form name="image"></x-error-form>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description') }}</label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('shard.description') }}">{{ old('description') }}</textarea>
                                    <x-error-form name="description"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description_ar') }}</label>
                                    <textarea name="description_ar" class="form-control" placeholder="{{ __('shard.description_ar') }}">{{ old('description_ar') }}</textarea>
                                    <x-error-form name="description_ar"></x-error-form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" href="" class="btn btn-primary">{{ __('shard.add') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
