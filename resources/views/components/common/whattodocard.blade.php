<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-1 gap-10">
@php
$items = [
    [
        'img' => '/images/paymenticon.png',
        'title' => 'Enhance Convenience',
        'description' => 'Offer a hassle-free way to manage travel expenses using the Vahan Card.',
        'hideOnSmall' => false
    ],
    [
        'img' => '/images/paymenticon.png',
        'title' => 'Enhance Convenience',
        'description' => 'Offer a hassle-free way to manage travel expenses using the Vahan Card.',
        'hideOnSmall' => true
    ],
    [
        'img' => '/images/paymenticon.png',
        'title' => 'Enhance Convenience',
        'description' => 'Offer a hassle-free way to manage travel expenses using the Vahan Card.',
        'hideOnSmall' => false
    ],
    [
        'img' => '/images/paymenticon.png',
        'title' => 'Enhance Convenience',
        'description' => 'Offer a hassle-free way to manage travel expenses using the Vahan Card.',
        'hideOnSmall' => false
    ],
];
@endphp

@foreach ($items as $index => $item)
    <div class="{{ $item['hideOnSmall'] ? 'sm:hidden lg:block' : 'lg:block' }}">
        @include('components.card1', ['item' => $item])
    </div>
@endforeach
</div>

