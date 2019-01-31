@if ($errors->any())
<br>
    <div class="notification is-danger shadow">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
