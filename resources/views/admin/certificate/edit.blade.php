@extends('admin.layout')

@section('title', __('shard.edit'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">{{ __('shard.edit-certificate') }}</h2>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.certificate.update', ['certificate' => $certificate]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        {{-- <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.name') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.name') }}"
                                        name="name" class="form-control" value="{{ $certificate->name }}">
                                    <x-error-form name="name"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.job') }}"
                                        name="job" class="form-control" value="{{ $certificate->job }}">
                                    <x-error-form name="job"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-file form-group">
                                    <input type="file" id="example-fileinput" name="image" class="form-control"
                                        value="{{ $certificate->image }}">
                                    <x-error-form name="image"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <textarea name="description" class="form-control" placeholder="{{ __('shard.description') }}">{{ $certificate->description }}</textarea>
                                    <x-error-form name="description"></x-error-form>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.name') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.name') }}"
                                        name="name" class="form-control" value="{{ $certificate->name }}">
                                    <x-error-form name="name"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.name_ar') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.name_ar') }}"
                                        name="name_ar" class="form-control" value="{{ $certificate->name_ar }}">
                                    <x-error-form name="name_ar"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.job') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.job') }}"
                                        name="job" class="form-control" value="{{ $certificate->job }}">
                                    <x-error-form name="job"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.job_ar') }}</label>
                                    <input type="text" id="simpleinput" placeholder="{{ __('shard.job_ar') }}"
                                        name="job_ar" class="form-control" value="{{ $certificate->job_ar }}">
                                    <x-error-form name="job_ar"></x-error-form>
                                </div>
                            </div>
                            <!-- /.col -->

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description') }}</label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('shard.description') }}">{{ $certificate->description }}</textarea>
                                    <x-error-form name="description"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="">{{ __('shard.description_ar') }}</label>
                                    <textarea name="description_ar" class="form-control" placeholder="{{ __('shard.description_ar') }}">{{ $certificate->description_ar }}</textarea>
                                    <x-error-form name="description_ar"></x-error-form>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="custom-file form-group">
                                    <label for="">{{ __('shard.image') }}</label>
                                    <input type="file" id="example-fileinput" name="image" class="form-control"
                                        value="{{ old('title') }}">
                                    <x-error-form name="image"></x-error-form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" href="" class="btn btn-primary">{{ __('shard.edit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
