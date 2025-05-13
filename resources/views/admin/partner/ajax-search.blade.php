<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>{{ __('shard.title') }}</th>
            <th>{{ __('shard.image') }}</th>
            <th width='15%'>{{ __('shard.actions') }}</th>

        </tr>
    </thead>
    <tbody>
        @if (count($partners) > 0)
            @foreach ($partners as $key => $partner)
                <tr>
                    <td>{{ $partners->firstItem() + $loop->index }}</td>
                    @if ($language == 'ar')
                        
                    <td>{{ $partner->name_ar }}</td>
                    @else
                    <td>{{ $partner->name }}</td>
                        
                    @endif
                    <td>
                        <img width="50px" src='{{ asset("storage/partners/$partner->image") }}' alt="">
                    </td>
                    <td>

                        <x-action-button
                            href=" {{ route('admin.partner.show', ['partner' => $partner]) }} "
                            type="show"></x-action-button>

                        <x-action-button
                            href=" {{ route('admin.partner.edit', ['partner' => $partner]) }} "
                            type="edit"></x-action-button>

                        <x-delete-form-button
                            href="{{ route('admin.partner.destroy', ['partner' => $partner]) }}" id="{{ $partner->id }}"></x-delete-form-button>
                    </td>
                </tr>
            @endforeach
        @else
            <x-empty-alert></x-empty-alert>
        @endif

    </tbody>
</table>

@if($partners->hasPages())
<div class="d-flex justify-content-center mt-4">
    {{ $partners->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
</div>
@endif