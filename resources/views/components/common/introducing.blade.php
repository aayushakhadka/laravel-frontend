<div class="grid lg:grid-cols-3 md:grid-cols-2 gap-10">
@php

$items = [
    [
        'img' => '/images/creditcardicon.png',
        'title' => 'Introducing Truecaller for Web',
        'description' => 'Experience a new way of texting with Truecaller on your desktop. Getting started is as easy as scanning a QR code. With just a few clicks, you’ll be up and running.'
        
    ],
    [
        'img' => '/images/creditcardicon.png',
        'title' => 'Introducing Truecaller for Web',
        'description' => 'Experience a new way of texting with Truecaller on your desktop. Getting started is as easy as scanning a QR code. With just a few clicks, you’ll be up and running.'
    ],
    [
        'img' => '/images/creditcardicon.png',
        'title' => 'Introducing Truecaller for Web',
        'description' => 'Experience a new way of texting with Truecaller on your desktop. Getting started is as easy as scanning a QR code. With just a few clicks, you’ll be up and running.',
        'uniqueClass' => 'special-card'  // Unique class for the first card only
    ]
];
@endphp

@foreach ($items as $index => $item)
        <div class="{{ isset($item['uniqueClass']) ? 'lg:block sm:block ' . $item['uniqueClass'] : 'lg:block sm:block' }}">
            @include('components.card2', ['item' => $item])
        </div>
    @endforeach


</div>