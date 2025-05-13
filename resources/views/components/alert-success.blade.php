@if (session("$method"))
    <div class="alert alert-success mt-4" id="success-alert">
        {{ session("$method") }}
    </div>
@endif
