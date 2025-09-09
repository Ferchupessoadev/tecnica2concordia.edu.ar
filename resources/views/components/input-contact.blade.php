@props(['placeholder' => '', 'type' => 'text', 'value' => '', 'class' => '', 'name' => ''])

@if ($type == 'textarea')
    <textarea class="resize-none w-full p-2 h-32 rounded bg-[rgba(255,255,255,0.1)] @error($name) border-red-500 @enderror {{ $class }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}">{{ $value }}</textarea>
@else
    <input class="w-full h-12 p-2 rounded bg-[rgba(255,255,255,0.1)] @error($name) border-red-500 @enderror {{ $class }}" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}">
@endif
