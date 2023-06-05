@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div class="">
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif
