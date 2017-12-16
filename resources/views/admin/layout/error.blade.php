@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
