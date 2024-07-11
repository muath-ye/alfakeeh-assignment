<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark text-uppercase ms-2']) }}>
    {{ $slot }}
</button>
