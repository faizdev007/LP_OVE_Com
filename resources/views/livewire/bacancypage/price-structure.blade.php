<div class="my-12 py-12 scroll-mt-20" id="727">
    @php
        $TOD = [
            "Include Recruitment Cost",
            'Hardware & Infra Cost',
            "Dedicated Delivery Manager",
            "Payroll Management",
            "Productivity Tracking Software",
            "Performance & Training Support"
        ];

        $ST = [
            "Include Recruitment Cost",
            'Hardware & Infra Cost',
            "Dedicated Delivery Manager",
            "Payroll Management",
            "Productivity Tracking Software",
            "Performance & Training Support"
        ];
    @endphp
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="relative grid gap-4 px-4 py-2 sm:px-6 lg:px-8 overflow-hidden container mx-auto">
        <div class="w-full mx-auto">
            <flux:heading class="text-center">
                <h1 class="text-3xl xl:text-[45px] font-extrabold text-gray-900 ">Choose the Right Pricing Plan for Your Custom Need</h1>
            </flux:heading>
            <flux:subheading class="text-center">
                <p class="mt-2 text-black xl:text-xl md:text-sm "><span class="underline">No hidden fees</span> — just simple, affordable pricing for teams of all sizes.</p>
            </flux:subheading>
        </div>
        <div class="grid md:grid-cols-3 md:divide-x divide-y md:divide-y-0 divide-black rounded-lg shadow drop-shadow-lg border border-black text-black">
            <div class="p-4 text-center flex h-full w-full items-center justify-center">
                <h2 class="text-2xl font-bold">Talent on Demand</h2>
            </div>
            <div class="p-4 grid gap-4 text-center">
                <h3 class="text-xl font-bold text-center"> Dedicated Developers</h3>
                <div class="">
                    <h3><strong class="text-4xl font-bold">$999</strong></h3>
                    <h3><strong class="text-xl">Monthly ( AUD )</strong></h3>
                </div>
                <hr class="border-black">
                <p>Management Fee Monthly + Indian Salary of Developers</p>
                <div class="flex justify-center">
                    <flux:modal.trigger name="book-a-call">
                        <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'book-a-call')" class="!text-white h-12 w-max flex gap-4 items-center cursor-pointer bg-bacancy-primary md:p-2 p-1 md:px-6 px-4 rounded hover:!bg-gray-800 focus:!ring-[#000000]">
                            Start Hiring Now
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </flux:modal.trigger>
                </div>
            </div>
            <div class="p-4">
                <p class="font-bold">Includes: </p>
                <ul class="mt-5 space-y-3">
                    @foreach ($TOD as $single)
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full ring-1 bg-green-500 ring-green-400/50">
                                <!-- check icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                            </span>
                            <span class="text-gray-800">{{$single}}</span>
                        </li>
                    @endforeach
                    <!-- Item -->
                </ul>
            </div>
        </div>
        <div class="grid md:grid-cols-3 md:divide-x divide-y md:divide-y-0 border bg-bacancy-primary rounded-lg shadow drop-shadow-lg text-white">
            <div class="p-4 text-center flex h-full w-full items-center justify-center">
                <h2 class="text-2xl font-bold">Sprint Team</h2>
            </div>
            <div class="p-4 flex flex-col justify-around gap-2 text-center">
                <h3 class="text-xl font-bold text-center"> Team of 5 Developers</h3>
                <div class="">
                    <h3><strong class="text-4xl font-bold">$3999</strong></h3>
                    <h3><strong class="text-xl">Monthly ( AUD )</strong></h3>
                </div>
                <hr>
                <p>Management Fee Monthly + Indian Salary of Developers</p>
                <div class="flex justify-center">
                    <flux:modal.trigger name="book-a-call">
                        <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'book-a-call')" class="!text-white h-12 w-max flex gap-4 items-center cursor-pointer bg-black md:p-2 p-1 md:px-6 px-4 rounded hover:!bg-gray-800 focus:!ring-[#000000]">
                            Start Hiring Now
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </flux:modal.trigger>
                </div>
            </div>
            <div class="p-4">
                <p class="font-bold">Includes: </p>
                <ul class="mt-5 space-y-3">
                    @foreach ($ST as $single)
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full ring-1 bg-green-500 ring-green-400/50">
                                <!-- check icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                            </span>
                            <span class="text-white">{{$single}}</span>
                        </li>
                    @endforeach
                    <!-- Item -->
                </ul>
            </div>
        </div>
        <div class="grid text-black rounded-lg shadow drop-shadow-lg border border-black p-4 text-center gap-4">
            <h2 class="text-3xl font-bold text-center"> Can't Find the Right Plan?</h2>
            <p>Let's Tailor One for You.</p>
            <div class="flex justify-center">
                <flux:modal.trigger name="book-a-call">
                    <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'book-a-call')" class="!text-white h-12 w-max flex gap-4 items-center cursor-pointer bg-bacancy-primary md:p-2 p-1 md:px-6 px-4 rounded hover:!bg-gray-800 focus:!ring-[#000000]">
                        Talk with Our Expert
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </flux:modal.trigger>
            </div>
        </div>
    </div>
</div>
