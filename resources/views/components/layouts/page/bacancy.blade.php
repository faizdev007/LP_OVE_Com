@props([
    'seo'=>[
        
    ],
    'header'=> [
        'btntext'=>'Book a 30 mins strategy call',
        'menu'=>[
            'Our Talent',
            'Technical Stack',
            'Success Stories',
            'FAQs',
            'Pricing'
        ]
    ],
    'modal'=>[
        
    ]
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white">
        <flux:header sticky class="border-b z-40 border-gray-500 bg-zinc-50">
            <div class="relative flex-1 gap-2 overflow-hidden mx-auto flex">
                <a href="{{ url()->current() }}" class="flex md:pe-8 items-center space-x-2 rtl:space-x-reverse lg:ms-0" wire:navigate>
                    <img src="{{ asset('assets/bacancy/logo.webp') }}" alt="{{ config('app.name') }}" class="md:h-12 h-10 w-auto" />
                </a>
                <nav class="items-center py-3 text-black text-xs xl:text-lg lg:flex hidden font-bold">
                    @foreach($header['menu'] as $key=>$link)
                        <a class="px-3" href="{{'#'.(723+$key)}}">{{$link}}</a>
                    @endforeach
                </nav>
                
                <flux:spacer />
        
                <!-- <flux:sidebar.toggle class="lg:hidden border !text-white !bg-bacancy-primary" icon="bars-3" inset="left" /> -->
                
                <flux:navbar class="-mb-px flex md:gap-3">
                    <a href="#GSH" class="inline-flex gap-2 items-center cursor-pointer uppercase justify-center md:p-3 p-2 font-medium text-black bg-white hover:text-white border border-bacancy-primary rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 2xl:text-[1.5rem] md:text-sm text-xs text-nowrap focus:!ring-[#1D4ED8]">Get Started</a>
                    <flux:modal.trigger name="book-a-call">
                        <button
                            class="inline-flex gap-2 items-center cursor-pointer uppercase justify-center md:p-3 p-2 font-medium text-white border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 md:text-sm text-xs 2xl:text-[1.5rem] text-nowrap !bg-bacancy-primary hover:!bg-[#1D4ED8] focus:!ring-[#1D4ED8]"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                <path d="M12 11.993a.75.75 0 0 0-.75.75v.006c0 .414.336.75.75.75h.006a.75.75 0 0 0 .75-.75v-.006a.75.75 0 0 0-.75-.75H12ZM12 16.494a.75.75 0 0 0-.75.75v.005c0 .414.335.75.75.75h.005a.75.75 0 0 0 .75-.75v-.005a.75.75 0 0 0-.75-.75H12ZM8.999 17.244a.75.75 0 0 1 .75-.75h.006a.75.75 0 0 1 .75.75v.006a.75.75 0 0 1-.75.75h-.006a.75.75 0 0 1-.75-.75v-.006ZM7.499 16.494a.75.75 0 0 0-.75.75v.005c0 .414.336.75.75.75h.005a.75.75 0 0 0 .75-.75v-.005a.75.75 0 0 0-.75-.75H7.5ZM13.499 14.997a.75.75 0 0 1 .75-.75h.006a.75.75 0 0 1 .75.75v.005a.75.75 0 0 1-.75.75h-.006a.75.75 0 0 1-.75-.75v-.005ZM14.25 16.494a.75.75 0 0 0-.75.75v.006c0 .414.335.75.75.75h.005a.75.75 0 0 0 .75-.75v-.006a.75.75 0 0 0-.75-.75h-.005ZM15.75 14.995a.75.75 0 0 1 .75-.75h.005a.75.75 0 0 1 .75.75v.006a.75.75 0 0 1-.75.75H16.5a.75.75 0 0 1-.75-.75v-.006ZM13.498 12.743a.75.75 0 0 1 .75-.75h2.25a.75.75 0 1 1 0 1.5h-2.25a.75.75 0 0 1-.75-.75ZM6.748 14.993a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 0 1.5h-4.5a.75.75 0 0 1-.75-.75Z" />
                                <path fill-rule="evenodd" d="M18 2.993a.75.75 0 0 0-1.5 0v1.5h-9V2.994a.75.75 0 1 0-1.5 0v1.497h-.752a3 3 0 0 0-3 3v11.252a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3V7.492a3 3 0 0 0-3-3H18V2.993ZM3.748 18.743v-7.5a1.5 1.5 0 0 1 1.5-1.5h13.5a1.5 1.5 0 0 1 1.5 1.5v7.5a1.5 1.5 0 0 1-1.5 1.5h-13.5a1.5 1.5 0 0 1-1.5-1.5Z" clip-rule="evenodd" />
                            </svg>
        
                            <span id="responsive-text">
                                {{ 'Schedule A Call' }}
                            </span>
                        </button>
                    </flux:modal.trigger>
                </flux:navbar>
            </div>
        </flux:header>
    
        <flux:main class="!p-0">
            {{ $slot }}
        </flux:main>
        
        <flux:modal name="book-a-call" :show="$errors->isNotEmpty()" focusable class="max-w-5xl overflow-hidden !bg-bacancy-primary !p-0">
            <livewire:modal.bacancy/>
        </flux:modal>
        <script>
            (function() {
                const elem = document.getElementById('responsive-text');
                if (!elem) return;
            
                function updateText() {
                    if (window.innerWidth < 768) {
                        elem.textContent = 'Book A Call';
                    } else {
                        elem.textContent = 'Schedule A Call';
                    }
                }
            
                // Run immediately
                updateText();
            
                // Optional: If you want it to change when resizing
                window.addEventListener('resize', updateText);
            })();
        </script>
        @fluxScripts
    </body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5K42N2M2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</html>
