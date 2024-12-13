<div class="grid lg:grid-cols-3 md:grid-cols-2 gap-10">
@php

$items = [
    [
        'heading' => 'Scam alert',
        'img' => '/images/serviceimg.png',
        'description' => 'Back to School Scams: What Parents and Students Need to...',
        'date' => 'Aug 22 2024',
        'time' => '3 min read',
        'hideOnSmall' => false
    ],
    [
        'heading' => 'Scam alert',
        'img' => '/images/serviceimg.png',
        'description' => 'Back to School Scams: What Parents and Students Need to...',
        'date' => 'Aug 22 2024',
        'time' => '3 min read',
        'hideOnSmall' => false
    ],
    [
        'heading' => 'Scam alert',
        'img' => '/images/serviceimg.png',
        'description' => 'Back to School Scams: What Parents and Students Need to...',
        'date' => 'Aug 22 2024',
        'time' => '3 min read',
        'hideOnSmall' => true
    ],
];
@endphp
@foreach ($items as $index => $item)
    <div class="{{ $item['hideOnSmall'] ? 'md:hidden lg:block' : 'lg:block' }}">
        @include('components.servicecard', ['item' => $item])
    </div>
@endforeach





</div>

