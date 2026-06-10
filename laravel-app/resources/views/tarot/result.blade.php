@extends('layouts.app')

@section('content')
    <div class="text-center py-8">
        <h1 class="text-zinc-100 text-4xl font-light tracking-tight mb-3 drop-shadow-[0_0_10px_rgba(255,26,26,0.3)]">Your Doom</h1>
        <p class="text-zinc-500 text-sm font-medium tracking-widest uppercase">
            {{ $reading->spread_type === 'single' ? 'Daily Curse' : 'Past, Present, Future' }}
        </p>
    </div>

    @php $positions = ['Past', 'Present', 'Future']; @endphp

    <div class="flex gap-8 flex-wrap justify-center mb-16">
        @foreach($cards as $index => $card)
            <div class="bg-zinc-950/80 backdrop-blur-xl border border-red-900/30 rounded-3xl p-8 text-center flex-1 min-w-[300px] max-w-[360px] shadow-[0_8px_30px_rgba(138,3,3,0.1)] hover:shadow-[0_8px_30px_rgba(255,26,26,0.2)] hover:border-red-900/60 transition-all duration-300">
                @if($reading->spread_type === 'three-card')
                    <p class="text-zinc-500 font-semibold text-xs tracking-widest uppercase mb-6 pb-3 border-b border-red-900/20">{{ $positions[$index] }}</p>
                @endif
                
                @if($card->image_url)
                    <div class="w-40 h-64 mx-auto mb-8 overflow-hidden rounded-xl shadow-[0_0_15px_rgba(255,26,26,0.2)] border border-red-900/30 bg-zinc-900/50 p-1">
                        <img src="{{ $card->image_url }}" alt="{{ $card->name }}" class="w-full h-full object-cover rounded-lg grayscale-[70%] sepia-[30%] hue-rotate-[-20deg] contrast-125">
                    </div>
                @else
                    <div class="w-24 h-24 mx-auto mb-6 text-horror-bloodLight drop-shadow-[0_0_8px_rgba(255,26,26,0.6)]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
                            <path fill-rule="evenodd" d="M3 2.25a.75.75 0 01.75.75v.54l1.838-.46a9.75 9.75 0 016.725.738l.108.054a8.25 8.25 0 005.58.652l3.109-.732a.75.75 0 01.917.81 47.784 47.784 0 00.005 10.337.75.75 0 01-.574.812l-3.114.733a9.75 9.75 0 01-6.594-.77l-.108-.054a8.25 8.25 0 00-5.69-.625l-2.202.55V21a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zm4.5 10.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                @endif

                <p class="text-zinc-100 text-2xl font-semibold tracking-tight mb-4 text-horror-bloodLight">{{ $card->name }}</p>
                <p class="text-zinc-400 text-sm leading-relaxed mb-8">{{ $card->upright_meaning }}</p>
                
                <div class="text-left space-y-4 bg-zinc-900/50 p-5 rounded-2xl border border-red-900/20">
                    <div>
                        <p class="text-zinc-300 text-xs font-bold uppercase tracking-wider mb-2 flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-horror-bloodDark text-horror-bloodLight flex items-center justify-center border border-red-900/50">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" /></svg>
                            </span> To Do
                        </p>
                        <p class="text-zinc-400 text-sm">{{ $card->action_do }}</p>
                    </div>
                    <div class="border-t border-red-900/20 pt-3">
                        <p class="text-zinc-300 text-xs font-bold uppercase tracking-wider mb-2 flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-zinc-950 text-horror-bloodLight flex items-center justify-center border border-red-900/50">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3"><path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" /></svg>
                            </span> To Avoid
                        </p>
                        <p class="text-zinc-400 text-sm">{{ $card->action_avoid }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($reading->spread_type === 'three-card')
    <div class="max-w-4xl mx-auto bg-zinc-950/80 border border-red-900/30 rounded-3xl p-10 mb-12 shadow-[0_8px_30px_rgba(138,3,3,0.1)] backdrop-blur-xl relative overflow-hidden text-center">
        <h2 class="text-horror-bloodLight text-2xl tracking-tight mb-5 font-semibold drop-shadow-[0_0_5px_rgba(255,26,26,0.3)]">Dark Synthesis</h2>
        <p class="text-zinc-400 leading-relaxed text-base">
            Berdasarkan kombinasi kartu <span class="text-zinc-200 font-semibold">{{ $cards[0]->name }}</span> (Masa Lalu), <span class="text-zinc-200 font-semibold">{{ $cards[1]->name }}</span> (Masa Kini), dan <span class="text-zinc-200 font-semibold">{{ $cards[2]->name }}</span> (Masa Depan), perjalananmu menunjukkan transisi yang kuat. Pelajaran dari masa lalu sedang membentuk fondasi yang kokoh untuk keputusanmu hari ini. Tetaplah berpegang pada nilai-nilaimu saat ini, karena itu akan menjadi kunci untuk membuka potensi positif di masa depan. Fokus utama kamu hari ini adalah menyelaraskan tindakanmu dengan tujuan jangka panjang yang ingin dicapai.
        </p>
    </div>
    @endif

    <div class="text-center flex gap-4 justify-center">
        <a href="{{ route('dashboard') }}">
            <button class="bg-zinc-900 border border-red-900/50 text-zinc-300 hover:text-horror-bloodLight hover:bg-zinc-950 hover:border-horror-blood font-medium px-8 py-3 rounded-full text-sm transition-all shadow-[0_0_10px_rgba(0,0,0,0.5)]">
                Draw Again
            </button>
        </a>
        <a href="{{ route('tarot.history') }}">
            <button class="bg-horror-bloodDark hover:bg-horror-blood text-white font-medium px-8 py-3 rounded-full text-sm transition-all shadow-[0_0_15px_rgba(138,3,3,0.5)]">
                View Archives
            </button>
        </a>
    </div>
@endsection