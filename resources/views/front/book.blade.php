@extends('front/layouts/app')
@section('title', 'Booking Meeting')
@section('content')

<section id="Content" class="bg-portto-black flex min-h-screen">
    <div class="w-[660px] min-h-screen flex flex-col p-[30px_40px] justify-end overflow-hidden bg-[url('{{ asset('images/background/side-image.png')}}')] bg-cover bg-center bg-no-repeat">
        <div class="flex flex-col bg-white p-[30px] gap-5 rounded-[30px] w-[580px]">
            <div class="flex h-10 items-start overflow-hidden">
                <img src="{{ asset('images/logos/logo-testi5.svg')}}" class="h-full object-contain" alt="photo">
            </div>
            <p class="font-semibold text-[22px] leading-[40px]">She helped us to build our first prototype to win our investor and early users heart that generate huge attraction.</p>
            <div class="flex h-8 w-fit shrink-0">
                <img src="{{ asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
                <img src="{{ asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
                <img src="{{ asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
                <img src="{{ asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
                <img src="{{ asset('images/icons/Star.svg')}}" class="w-full h-full" alt="star">
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-[50px] items-center justify-center mx-auto py-4 bg-[url('{{ asset('images/Ellipse.svg')}}')] bg-center bg-no-repeat bg-contain bg-[length:540px]">
        <div class="flex flex-col text-center text-white">
            <h1 class="font-extrabold text-[50px] leading-[75px]">Book a Meeting</h1>
            <p class="text-lg">Tell me anything about your biggest future dreams</p>
        </div>
        <form action="" class="flex flex-col gap-5 w-[550px]">
            <label class="flex flex-col gap-[10px] font-semibold">
                <span class="text-white">Complete Name</span>
                <input type="text" name="name" id="name" class="bg-white rounded-full p-[14px_30px] appearance-none outline-none focus:ring-[3px] focus:ring-portto-green placeholder:font-normal placeholder:text-base placeholder:text-[#878C9C]" placeholder="Write your complete name" required>
            </label>
            <label class="flex flex-col gap-[10px] font-semibold">
                <span class="text-white">Email Address</span>
                <input type="email" name="email" id="email" class="bg-white rounded-full p-[14px_30px] appearance-none outline-none focus:ring-[3px] focus:ring-portto-green placeholder:font-normal placeholder:text-base placeholder:text-[#878C9C]" placeholder="What’s your email address" required>
            </label>
            <div class="grid grid-cols-2 gap-5">
                <label class="flex flex-col gap-[10px] font-semibold w-full">
                    <span class="text-white">Category</span>
                    <select name="category" id="category" class="font-semibold bg-white rounded-full p-[14px_30px] pr-[54px] appearance-none outline-none focus:ring-[3px] focus:ring-portto-green invalid:text-[#878C9C] invalid:font-normal bg-[url({{ asset('images/icons/arrow-down.svg')}})] bg-no-repeat bg-[91%]" required>
                        <option value="" class="text-[#878C9C]" selected disabled hidden>Select category</option>
                        <option value="" >Website Development</option>
                    </select>
                </label>
                <label class="flex flex-col gap-[10px] font-semibold w-full">
                    <span class="text-white">Est. Budget (USD)</span>
                    <input type="number" name="budget" id="email" class="bg-white rounded-full p-[14px_30px] appearance-none outline-none focus:ring-[3px] focus:ring-portto-green placeholder:font-normal placeholder:text-base placeholder:text-[#878C9C]" placeholder="Tell me your budget" required>
                </label>
            </div>
            <label class="flex flex-col gap-[10px] font-semibold">
                <span class="text-white">Project Brief</span>
                <textarea name="brief" id="brief" class="rounded-[20px] p-[14px_30px] appearance-none outline-none focus:ring-[3px] focus:ring-portto-green placeholder:font-normal placeholder:text-base placeholder:text-[#878C9C] h-[250px]" placeholder="Brief me your a whole project" required></textarea>
            </label>
            <button class="font-bold text-lg text-white bg-portto-purple rounded-[20px] p-5 transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">Request for Meeting</button>
        </form>
    </div>
</section>


@endsection

