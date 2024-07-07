<nav class="container max-w-[1130px] mx-auto flex justify-between items-center pt-[30px] z-10">
    <a href="index.html" class="flex shrink-0 h-fit w-fit">
        <img src="{{asset('images/logos/logo.svg')}}" alt="logo">
    </a>
    <div class="flex gap-[50px] items-center">
        <ul class="flex gap-[50px] items-center text-white">
            <li>
                <a href="{{ route('front.index') }}"  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Home</a>
            </li>
            <li>
                <a href="{{ route('front.services') }}"  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Services</a>
            </li>
            <li>
                <a href="{{ route('front.index') }}"  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
            </li>
            <li>
                <a href="{{ route('front.index') }}"  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">Pricing</a>
            </li>
            <li>
                <a href="{{ route('front.index') }}"  class="font-medium text-lg hover:text-portto-light-gold transition-all duration-300">About</a>
            </li>
        </ul>
        <button class="bg-portto-light-gold font-bold text-lg p-[14px_30px] rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">Hire Me</button>
    </div>
</nav>