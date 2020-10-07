@if (session()->has('success'))
    <app-messages :class="['success']">
        <p>{{ session()->get('success') }}</p>
    </app-messages>
@endif
