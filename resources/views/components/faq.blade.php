<section id="FAQ" class="container max-w-[1130px] mx-auto">
    <div class="flex gap-[70px] items-center pt-[100px] pb-[150px]">
        <div class="flex flex-col gap-[30px]">
            <div class="w-20 h-20 flex shrink-0 rounded-full bg-portto-purple items-center justify-center">
                <img src="{{ asset('images/icons/messages.svg')}}" alt="icon">
            </div>
            <div class="flex flex-col gap-[10px]">
                <h2 class="font-extrabold text-[50px] leading-[70px]">Frequently Asked Questions</h2>
                <p class="text-lg text-[#878C9C]">If you have any question please contact me.</p>
            </div>
            <a href="" class="bg-portto-black font-bold text-lg text-white rounded-full p-[14px_30px] w-fit transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">Contact Me</a>
        </div>
        <div class="flex flex-col gap-[30px] w-[603px] shrink-0">
            <div class="flex flex-col p-5 rounded-2xl bg-[#F4F5F8] w-full">
                <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-1">
                    <span class="font-bold text-2xl">How do I work usually?</span>
                    <div class="arrow w-9 h-9 flex shrink-0">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                    </div>
                </button>
                <div id="accordion-faq-1" class="accordion-content hide">
                    <p class="text-[20px] leading-[36px] pt-5">As a freelancer, my work process is characterized by flexibility, self-discipline, and a strong emphasis on client communication.</p>
                </div>
            </div>
            <div class="flex flex-col p-5 rounded-2xl bg-[#F4F5F8] w-full">
                <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-2">
                    <span class="font-bold text-2xl">How much I charge per project?</span>
                    <div class="arrow w-9 h-9 flex shrink-0">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                    </div>
                </button>
                <div id="accordion-faq-2" class="accordion-content hide">
                    <p class="text-[20px] leading-[36px] pt-5">I don’t charge hourly. I charge based on the project brief and given timeline to finish that particular project.</p>
                </div>
            </div>
            <div class="flex flex-col p-5 rounded-2xl bg-[#F4F5F8] w-full">
                <button class="accordion-button flex justify-between gap-1 items-center" data-accordion="accordion-faq-3">
                    <span class="font-bold text-2xl">Can I work full-time?</span>
                    <div class="arrow w-9 h-9 flex shrink-0">
                        <img src="{{ asset('images/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
                    </div>
                </button>
                <div id="accordion-faq-3" class="accordion-content hide">
                    <p class="text-[20px] leading-[36px] pt-5">I don’t work full-time. At this moment, I prefer to work remotely and based on the certain project only.</p>
                </div>
            </div>
        </div>
    </div>
</section>