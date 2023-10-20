<!-- resources/views/components/dynamic-component.blade.php -->
<div class="text-{{ $color ?? 'black' }}">
    {{ $slot }}
</div>
