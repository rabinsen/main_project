@if(Session::has('success1'))

    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{ Session::get('success1') }}
    </div>
    @endif