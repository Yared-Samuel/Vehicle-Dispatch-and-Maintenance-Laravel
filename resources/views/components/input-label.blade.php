@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium font-bold text-sm text-teal-700']) }}>
    {{ $value ?? $slot }}
</label>
