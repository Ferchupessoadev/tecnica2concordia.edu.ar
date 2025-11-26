@php
$classes = Flux::classes()
    ->add('[:where(&)]:min-w-48 p-[.3125rem]')
    ->add('rounded-lg shadow-xs')
    ->add('border border-zinc-600')
    ->add('bg-zinc-700')
    ->add('focus:outline-hidden')
    ;
@endphp

<ui-menu
    {{ $attributes->class($classes) }}
    popover="manual"
    data-flux-menu
>
    {{ $slot }}
</ui-menu>
