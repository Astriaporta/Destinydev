@if ($errors->any())
    <app-messages :class="['error']">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </app-messages>
@endif
