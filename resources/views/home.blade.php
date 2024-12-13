@extends('pages.app')
@section('content')


<!-- section1 -->
<section class="flex gap-8 flex-col container mx-auto items-center justify-center max-w-[80%]">
    <h1 class="text-[40px] font-semibold">What to do</h1>
    @include('components.common.whattodocard')
</section>

<!-- section2 -->

<section class="flex justify-between items-center w-full ">
    <div class="container flex md:flex-row sm:flex-col md:justify-between max-w-[90%] mx-auto">
        <div class="flex flex-col gap-4 ">
            <h2 class="text-[#00A82D] font-semibold">TRENDING</h2>
            <h1 class="md:text-[43px] lg:text-[48px] sm:text-[28px] lg:max-w-[604px] md:max-w-[427px] sm:max-w-[396px] font-semibold">Introducing Vahan Card for Easy Travel Payments</h1>
            <p class="text-left text-[16px] leading-[28px] sm:max-w-[604px]">Experience a new way of texting with Truecaller on your desktop. Getting started is as easy as scanning a QR code. With just a few clicks, you'll be up and running.</p>
        </div>
        <div class="flex flex-row items-center justify-center">
            <img src="/images/Group8-large.png" alt="Cut Image Large" class="sm:hidden md:block lg:max-w-[582px] lg:max-h-[463px] md:max-w-[456px] md:max-h-[366px]  md:rounded-5xl  lg:rounded-0">
            <img src="/images/Group8-small.jpg" alt="Cut Image Small" class="block md:hidden w-[395px] max-h-[300px] ">
        </div>
    </div>
</section>

<!-- section3 -->

<section class="flex gap-8 flex-col container mx-auto items-center justify-center max-w-[90%]">
    @include('components.common.introducing')
</section>


<!-- section4 -->
<section class="flex justify-between">
    <div class="container max-w-[90%] mx-auto flex md:flex-row sm:flex-col justify-between items-center sm:gap-5">
        <!-- Image Section -->
        <div>
            <img class="h-[295px] w-[500px]" src="/images/image2.jpg" alt="" />
        </div>
        <!-- Text Content Section -->
        <div class="flex flex-col gap-5">
            <h2 class="text-[#00A82D] font-semibold">TRENDING</h2>
            <h1 class="md:text-[30px] leading-[46px] font-semibold lg:max-w-[551px] md:max-w-[384px]">Introducing Vahan Card for Easy Travel Payments</h1>
            <p class="text-left text-[16px] leading-[28px] md:max-w-[372px] lg:max-w-[585px]">Experience a new way of texting with Truecaller on your desktop. Getting started is as easy as scanning a QR code. With just a few clicks, you'll be up and running.</p>
            <button class="max-w-[150px] p-2 text-[#00A82D] border-[#00A82D] border-2 rounded-3xl">
                Set it up now
            </button>
        </div>

    </div>
</section>

<!-- section5 -->
<section class="flex md:flex-row sm:flex-col justify-between">
    <div class="container max-w-[90%] mx-auto flex md:flex-row sm:flex-col justify-between items-center sm:gap-5">
        <!-- Image Section -->

        <!-- Text Content Section -->
        <div class="flex flex-col gap-5">
            <h2 class="text-[#00A82D] font-semibold">TRENDING</h2>
            <h1 class="md:text-[30px] leading-[46px] lg:max-w-[551px] font-semibold md:max-w-[384px]">Introducing Vahan Card for Easy Travel Payments</h1>
            <p class="text-left md:max-w-[372px] lg:max-w-[585px] text-[16px] leading-[28px]">Experience a new way of texting with Truecaller on your desktop. Getting started is as easy as scanning a QR code. With just a few clicks, you'll be up and running.</p>
            <button class="max-w-[150px] p-2 text-[#00A82D] border-[#00A82D] border-2 rounded-3xl">
                Set it up now
            </button>
        </div>
        <div>
            <img class=" w-[500px]" src="/images/image2.jpg" alt="" />
        </div>
    </div>
</section>

<!-- section6 -->
<section >
    <div class="max-w-full bg-[#EAFBEF] sm:h-[1288px] md:h-[580px] lg:h-[600px] flex flex-col items-center justify-center  ">
    <div class="container max-w-[90%] mx-auto flex flex-col gap-12 justify-center items-center ">
        <h1 class=" font-semibold text-[38px] leading-[45px] sm:text-center">
            See our latest services
        </h1>
        <!-- services card -->
        @include('components.common.services')


    </div>

    </div>

@endsection



</section>
