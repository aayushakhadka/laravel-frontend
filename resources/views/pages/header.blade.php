<style>
    #sidebar {
        z-index: 1000;
    }

    body.sidebar-open {
        overflow: hidden;
    }
</style>

<div class="bg-cover sm:max-h-[557px] lg:max-h-[728px] max-w-full relative" style="background-image:url('/images/backgraound.jpg')">
    <!-- Content Wrapper -->
    <div class="flex-col bg-black sm:h-[557px] lg:h-[728px] max-w-full bg-opacity-60">
        <!-- Navigation Section -->
        <div class="container max-w-[90%] xl:flex items-center sm:hidden justify-between p-8 mx-auto min-h-[58px]">
            <!-- Logo Section -->
            <div class="flex gap-14">
                <h1 class="text-white text-xl font-semibold">Logo</h1>
                <!-- Navigation Menu -->
                <ol class="hidden xl:flex font-semibold text-white gap-7">
                    <li>Home</li>
                    <li>How it Works</li>
                    <li>Plans & Pricing</li>
                    <li>My Account</li>
                    <li>Get a Card</li>
                </ol>
            </div>

            <!-- Right Section -->
            <div class="flex items-center gap-10">
                <span class="sm:hidden lg:flex items-center gap-3">
                    <img class="h-[1rem] text-white" src="images/Vector.png" />
                    <h2 class="text-white font-semibold">Scam Alert</h2>
                </span>
                <button class="sm:hidden lg:block p-2 px-4 text-white rounded-3xl bg-[#00A82D] ">
                    Vahan Card for Web
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Section -->
        <div class="sm:flex xl:hidden justify-between items-center max-w-[90%] mx-auto min-h-[58px] px-10 relative">
    <!-- Logo Section -->
    <h1 class="text-white text-xl font-semibold">Logo</h1>

    <!-- Buttons and Menu Section -->
    <div class="flex items-center justify-center gap-4">
        <button class=" sm:hidden md:block mt-5 p-2 px-4 text-white rounded-3xl bg-[#00A82D]">
            Vahan Card for Web
        </button>
        <button id="menu-toggle" class="text-white text-2xl flex items-center justify-center">
            ☰
        </button>
    </div>

<!-- Sidebar for Small Screens -->
<div id="sidebar" class="fixed inset-y-0 left-0 bg-blue-500 w-[250px] p-5 transform -translate-x-full transition-transform duration-300 xl:hidden">
    <button id="close-sidebar" class="text-white text-xl mb-5">✕</button>
    <h1 class="text-white text-xl font-semibold mb-5">Logo</h1>
    <ol class="flex flex-col text-white gap-4">
        <li>Home</li>
        <li>How it Works</li>
        <li>Plans & Pricing</li>
        <li>My Account</li>
        <li>Get a Card</li>
    </ol>
    <div class="mt-10">
        <span class="flex items-center gap-3">
            <img class="h-[1rem] text-white" src="images/Vector.png" />
            <h2 class="text-white">Scam Alert</h2>
        </span>
    </div>
</div>
</div>


<!-- Main Content Section -->
<div class="container max-w-[90%] flex flex-col justify-center relative md:top-[80px] sm:top-[80px] mx-auto">
    <div class="max-w-[612px]">
        <p class="text-white sm:text-[34px] lg:text-[60px] md:text-[55px] px-5 font-bold">
            Quick and Easy Travel Payments for Students
        </p>
        <div class="flex sm:flex-col md:flex-row p-4 gap-10">
            <span class="flex gap-2 items-center w-[250px] p-4 h-[50px] text-white rounded-3xl bg-[#00A82D]">
                <img class="h-[1rem] text-white" src="images/Vector.png" />
                <button class="text-white">Download Vahan Card</button>
            </span>
            <button class="flex gap-2 items-center w-[250px] p-4 h-[50px] text-[#00A82D] font-bold rounded-3xl bg-white">
                Download Vahan Card
            </button>
        </div>
    </div>
    
</div>
<div class=" bg-no-repeat bg-contain lg:w-[528px] lg:h-[465px] md:top-[109px] md:w-[233px] md:h-[196px] top-[29px]  md:block sm:hidden left-0 absolute" style="background-image: url('/images/shadow3.png');">

</div>

<div class=" bg-no-repeat bg-contain md:block lg:w-[528px] lg:h-[391.69px] md:w-[307.42px] md:h-[288.06px] sm:hidden bottom-0 rotate-180 right-0 absolute" style="background-image: url('/images/shadow3.png');">

</div>
</div>
</div>


<script>
    const menuToggle = document.getElementById('menu-toggle');
    const closeSidebar = document.getElementById('close-sidebar');
    const sidebar = document.getElementById('sidebar');

    if (!menuToggle) console.error('Menu toggle button not found');
    if (!closeSidebar) console.error('Close sidebar button not found');
    if (!sidebar) console.error('Sidebar element not found');

    menuToggle?.addEventListener('click', () => {
        console.log('Menu toggle clicked');
        if (sidebar) {
            sidebar.classList.remove('-translate-x-full');
            console.log('Sidebar opened');
        }
    });

    closeSidebar?.addEventListener('click', () => {
        console.log('Close sidebar clicked');
        if (sidebar) {
            sidebar.classList.add('-translate-x-full');
            console.log('Sidebar closed');
        }
    });
</script>