@extends('admin.layout')

@section('title', __('shard.Advisors'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h2 class="page-title">{{ __('shard.Advisors') }}</h2>
                <x-action-button href="{{ route('admin.advisor.create') }}" type="create"></x-action-button>
            </div>
            <x-alert-success method="success"></x-alert-success>

            <div class="row">
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <x-form-elements-table></x-form-elements-table>

                            <div id="AdvisorTableSearch">
                                @include('admin.advisor.ajax-search', ['advisors' => $advisors])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src='{{ asset('ajax') }}/searchPagination.js'></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    initSearchAndPagination({
        searchRoute: "{{route('admin.advisor.search') }}",
        tableContainerId: 'AdvisorTableSearch',
        searchInputId: 'searchInput',
        perPageSelectId: 'perPageSelect',
        defaultPerPage: 5,
        searchDelay: 500
    });
});
</script>
<script src='{{ asset('js') }}/notifications.js'></script>