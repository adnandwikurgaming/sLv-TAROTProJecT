@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h1 class="text-zinc-100 text-3xl font-light tracking-tight mb-2 drop-shadow-[0_0_8px_rgba(255,26,26,0.2)]">Archives of the Damned</h1>
        <p class="text-zinc-500 text-sm">Your past omens and dark insights.</p>
    </div>

    @forelse($readings as $reading)
        <a href="{{ route('tarot.show', $reading->id) }}" class="block mb-6 group cursor-pointer transition-all duration-300">
            <div class="bg-zinc-950/80 backdrop-blur-xl border border-red-900/30 shadow-[0_4px_20px_rgba(0,0,0,0.5)] rounded-2xl p-6 group-hover:border-red-900/60 group-hover:shadow-[0_8px_30px_rgba(255,26,26,0.15)] transition-all duration-300">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-zinc-100 text-sm tracking-widest font-semibold flex items-center gap-2 uppercase">
                        <span class="text-horror-bloodLight w-5 h-5 drop-shadow-[0_0_5px_rgba(255,26,26,0.6)]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        {{ $reading->spread_type === 'single' ? 'Daily Curse' : 'Past, Present, Future' }}
                    </span>
                    <span class="text-zinc-500 text-xs font-medium">{{ $reading->created_at->format('d M Y, H:i') }}</span>
                </div>
                <div class="flex gap-4 flex-wrap">
                    @foreach($reading->cards() as $card)
                        <div class="bg-zinc-900/50 border border-red-900/20 rounded-xl p-4 flex-1 min-w-[160px] text-center flex flex-col items-center group-hover:bg-zinc-900 transition-colors">
                            @if($card->image_url)
                                <div class="w-16 h-24 mb-3 overflow-hidden rounded shadow-[0_0_10px_rgba(255,26,26,0.1)] border border-red-900/30">
                                    <img src="{{ $card->image_url }}" alt="{{ $card->name }}" class="w-full h-full object-cover grayscale-[70%] sepia-[30%] hue-rotate-[-20deg] contrast-125">
                                </div>
                            @endif
                            <p class="text-zinc-300 text-sm tracking-wide mb-1 font-semibold group-hover:text-horror-bloodLight transition-colors">{{ $card->name }}</p>
                            <p class="text-zinc-500 text-xs line-clamp-2">{{ $card->upright_meaning }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="mt-5 text-center">
                    <span class="text-zinc-500 text-xs tracking-widest uppercase font-medium group-hover:text-horror-bloodLight transition-colors drop-shadow-[0_0_2px_rgba(255,26,26,0.5)]">View Details ➔</span>
                </div>
            </div>
        </a>
    @empty
        <div class="bg-zinc-950/80 backdrop-blur-xl border border-red-900/30 shadow-sm rounded-2xl p-12 text-center">
            <p class="text-zinc-500 mb-6">No omens found in your archives.</p>
            <a href="{{ route('dashboard') }}" class="bg-horror-bloodDark hover:bg-horror-blood text-white font-medium px-8 py-3 rounded-full text-sm transition-all shadow-[0_0_15px_rgba(138,3,3,0.5)] inline-block">
                Summon a Reading
            </a>
        </div>
    @endforelse
@endsection