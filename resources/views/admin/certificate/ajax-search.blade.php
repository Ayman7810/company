<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ __('shard.name') }}</th>
            <th>{{ __('shard.image') }}</th>
            <th>{{ __('shard.job') }}</th>
            <th>{{ __('shard.description') }}</th>
            <th width='15%'>{{ __('shard.actions') }}</th>

        </tr>
    </thead>
    <tbody>
        @if (count($certificates) > 0)
            @foreach ($certificates as $key => $certificate)
                <tr>
                    <td>{{ $certificates->firstItem() + $loop->index }}</td>
                    @if ($language == 'ar')
                        
                    <td>{{ $certificate->name_ar }}</td>
                    <td><img width="70px" src='{{ asset("storage/certificates/$certificate->image") }}' alt=""></td>
                    <td>{{ $certificate->job_ar }}</td>
                    <td>{{ Str::words($certificate->description_ar, 10, '...') }}</td>
                    @else
                    <td>{{ $certificate->name }}</td>
                    <td><img width="70px" src='{{ asset("storage/certificates/$certificate->image") }}' alt=""></td>
                    <td>{{ $certificate->job}}</td>
                    <td>{{ Str::words($certificate->description, 10, '...') }}</td>
                    @endif
                    <td>

                        <x-action-button
                            href=" {{ route('admin.certificate.show', ['certificate' => $certificate]) }} "
                            type="show"></x-action-button>

                        <x-action-button
                            href=" {{ route('admin.certificate.edit', ['certificate' => $certificate]) }} "
                            type="edit"></x-action-button>

                        <x-delete-form-button
                            href="{{ route('admin.certificate.destroy', ['certificate' => $certificate]) }}" id="{{ $certificate->id }}"></x-delete-form-button>



                    </td>
                </tr>
            @endforeach
        @else
            <x-empty-alert></x-empty-alert>
        @endif

    </tbody>
</table>

@if($certificates->hasPages())
<div class="d-flex justify-content-center mt-4">
    {{ $certificates->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
</div>
@endif