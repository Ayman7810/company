{{-- <form action="{{ $href }}" method="post" class="d-inline">
    @csrf
    @method('DELETE')
    <a href="{{ $href }}" class="badge badge-pill badge-danger p-2"
        onclick="event.preventDefault();
        this.closest('form').submit();" style="padding: 5px !important;">
        <span class="fe fe-24 fe-trash-2"></span>
    </a>
</form> --}}


<a  class="badge badge-pill badge-danger p-2 text-white" data-toggle="modal" data-target="#verticalModal-{{ $id }}"
    style="padding: 5px !important;">
    
    <span class="fe fe-24 fe-trash-2"></span>
</a>



<div class="modal fade" id="verticalModal-{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verticalModalTitle">{{ __('shard.delete') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">{{ __('shard.delete-message') }} {{ $id }}</div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary"
                    data-dismiss="modal">{{ __('shard.close') }}</button>
                <form action="{{ $href }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <a href="{{ $href }}" class="btn mb-2 btn-danger"  onclick="event.preventDefault();
    this.closest('form').submit();">{{ __('shard.yes') }}</a>
                </form>

            </div>
        </div>
    </div>
</div>
