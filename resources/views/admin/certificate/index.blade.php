@extends('admin.layout')

@section('title', __('shard.certificates'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h2 class="page-title">{{ __('shard.certificate') }}</h2>
                <x-action-button href=" {{ route('admin.certificate.create') }} " type="create"></x-action-button>
            </div>
            <x-alert-success method="create-project-success"></x-alert-success>
            <x-alert-success method="delete-project-success"></x-alert-success>
            <x-alert-success method="edit-project-success"></x-alert-success>

            <div class="row">
                <!-- simple table -->
                <div class="col-md-12 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <x-form-elements-table></x-form-elements-table>
                            <!-- start table -->
                            <div id="CertificateTableSearch">
                                @include('admin.certificate.ajax-search', [
                                    'certificates' => $certificates,
                                ])
                            </div>
                            <!-- end table -->
                        </div>
                    </div>
                </div> <!-- simple table -->
                <!-- Bordered table -->
            </div> <!-- .col-12 -->
        </div>
    </div>
@endsection
<script src='{{ asset('ajax') }}/searchPagination.js'></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    initSearchAndPagination({
        searchRoute: "{{route('admin.certificate.search') }}",
        tableContainerId: 'CertificateTableSearch',
        searchInputId: 'searchInput',
        perPageSelectId: 'perPageSelect',
        defaultPerPage: 5,
        searchDelay: 500
    });
});
</script>
<script src='{{ asset('js') }}/notifications.js'></script>

