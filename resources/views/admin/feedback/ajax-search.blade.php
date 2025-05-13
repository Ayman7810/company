@if (!empty($messages))
    
<div class="card shadow">
    <div class="card-body">
        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="all2">
                            <label class="custom-control-label" for="all2"></label>
                        </div>
                    </th>
                    <th>#</th>
                    <th>{{ __('shard.name') }}</th>
                    <th>{{ __('shard.email') }}</th>
                    <th >{{ __('shard.message') }}</th>
                    <th>{{__('shard.actions')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as  $key => $message)
                    
                <tr>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="2474">
                            <label class="custom-control-label" for="2474"></label>
                        </div>
                    </td>
                    <td>
                        <p class="mb-0 text-muted"><strong>{{ $messages->firstItem() + $loop->index }}</strong></p>
                    </td>
                    <td>
                        <p class="mb-0 text-muted"><strong>{{ $message->name }}</strong></p>
                    </td>
                    <td>
                        <p class="mb-0 text-muted">{{ $message->email }}</p>
                    </td>
                    <td>
                        <p class="mb-0 text-muted">{{ $message->message }}</p>
                    </td>
                  
                    <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted sr-only">{{__('shard.actions')}}</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Remove</a>
                            <a class="dropdown-item" href="#">Assign</a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endif


@if($messages->hasPages())
<div class="d-flex justify-content-center mt-4">
    {{ $messages->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
</div>
@endif