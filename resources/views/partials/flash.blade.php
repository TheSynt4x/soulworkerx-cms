@if (Session::has('success'))
    <p class="alert alert-success mb-20">{{ Session::get('success') }}</p>
@endif

@if (Session::has('info'))
    <p class="alert alert-info mb-20">{{ Session::get('info') }}</p>
@endif

@if (Session::has('error'))
    <p class="alert alert-danger mb-20">{{ Session::get('error') }}</p>
@endif
