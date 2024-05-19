<section class="pb-20 hero">
    <x-navbar />

    {{-- tagline --}}
    <div class="px-[220px] text-center my-10 text-white font-semibold text-4xl">{{ $tagline }}</div>

    {{ $slot }}
</section>