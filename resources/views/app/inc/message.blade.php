@if (Session::has('success'))
    <div>
        <div class="alert alert-success">
            {{ session::get('success') }}
        </div>
    </div>
@endif
@if ($errors->any())
    <div>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
