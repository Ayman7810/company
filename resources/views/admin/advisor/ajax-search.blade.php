<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ __('shard.name') }}</th>
            <th>{{ __('shard.image') }}</th>
            <th>{{ __('shard.description') }}</th>
            <th width='15%'>{{ __('shard.actions') }}</th>

        </tr>
    </thead>
    <tbody>
        @if (count($advisors) > 0)
            @foreach ($advisors as $key => $advisor)
                <tr>
                    <td>{{ $advisors->firstItem() + $loop->index }}</td>
                    @if ($language == 'ar')
                    <td>{{ $advisor->name_ar }}</td>
                    <td><img width="70px" src='{{ asset("storage/advisors/$advisor->image") }}' alt="{{ $advisor->name_ar }}"></td>
                   
                    <td>{{ Str::words($advisor->description_ar, 10, '...') }}</td>
                    @else
                    <td>{{ $advisor->name }}</td>
                    <td><img width="70px" src='{{ asset("storage/advisors/$advisor->image") }}' alt="{{ $advisor->name }}"></td>
                   
                    <td>{{ Str::words($advisor->description, 10, '...') }}</td>
                    @endif
                    <td>

                        <x-action-button
                            href=" {{ route('admin.advisor.show', ['advisor' => $advisor]) }} "
                            type="show"></x-action-button>

                        <x-action-button
                            href=" {{ route('admin.advisor.edit', ['advisor' => $advisor]) }} "
                            type="edit"></x-action-button>

                        <x-delete-form-button
                            href="{{ route('admin.advisor.destroy', ['advisor' => $advisor]) }}" id="{{ $advisor->id }}"></x-delete-form-button>



                    </td>
                </tr>
            @endforeach
        @else
            <x-empty-alert></x-empty-alert>
        @endif

    </tbody>
</table>

@if($advisors->hasPages())
<div class="d-flex justify-content-center mt-4">
    {{ $advisors->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
</div>
@endif