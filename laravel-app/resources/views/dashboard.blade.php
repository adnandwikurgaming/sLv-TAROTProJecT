@extends('layouts.app')

@section('content')
    <div class="text-center py-10">
        <h1 class="text-zinc-100 text-4xl font-light tracking-tight mb-3">Welcome, <span class="font-semibold text-horror-bloodLight">{{ Auth::user()->name }}</span></h1>
        <p class="text-zinc-500 text-sm font-medium tracking-widest uppercase">Embrace the shadows</p>
    </div>

    <div class="bg-zinc-950/80 backdrop-blur-xl border border-red-900/30 shadow-[0_8px_30px_rgba(138,3,3,0.1)] rounded-2xl p-10 text-center mb-10 transition-all hover:shadow-[0_8px_30px_rgba(255,26,26,0.15)] hover:border-red-900/50">
        <h2 class="text-zinc-100 text-2xl font-semibold tracking-tight mb-2">Draw Your Fate</h2>
        <p class="text-zinc-400 text-sm mb-8">Select a reading spread to unveil the hidden truths.</p>

        <form method="POST" action="{{ route('tarot.draw') }}">
            @csrf
            <div class="flex justify-center gap-6 mb-10 flex-wrap">
                <label class="relative flex flex-col items-center gap-3 p-6 border-2 border-red-900/20 bg-zinc-900/50 rounded-xl cursor-pointer transition-all hover:border-horror-blood/50 hover:bg-zinc-900 has-[:checked]:border-horror-bloodLight has-[:checked]:bg-horror-bloodDark/20 has-[:checked]:shadow-[0_0_15px_rgba(255,26,26,0.2)]">
                    <input type="radio" name="spread_type" value="single" checked class="sr-only">
                    <svg viewBox="0 0 512 512" fill="currentColor" class="w-10 h-10 text-horror-bloodLight drop-shadow-[0_0_5px_rgba(255,26,26,0.5)]">
                        <path d="M392.533,135.568L119.467,408.635v48.282c0.017-0.017,0.017-0.034,0.034-0.051l273.033-273.024V135.568z"/>
                        <polygon points="392.533,352.785 284.518,460.8 332.792,460.8 392.533,401.058 "/>
                        <polygon points="119.469,167.279 235.54,51.2 187.267,51.2 119.469,118.997 "/>
                        <polygon points="187.983,460.8 392.536,256.247 392.536,207.974 139.702,460.8 "/>
                        <polygon points="259.675,51.2 119.464,191.411 119.464,239.684 307.948,51.2 "/>
                        <polygon points="392.531,280.38 212.119,460.8 260.384,460.8 392.531,328.653 "/>
                        <polygon points="392.534,460.8 392.534,425.19 356.925,460.8 "/>
                        <path d="M418.133,0H93.867c-14.114,0-25.6,11.486-25.6,25.6v460.8c0,14.114,11.486,25.6,25.6,25.6h324.267 c14.114,0,25.6-11.486,25.6-25.6V25.6C443.733,11.486,432.247,0,418.133,0z M409.6,469.333c0,4.719-3.814,8.533-8.533,8.533 H110.933c-4.719,0-8.533-3.814-8.533-8.533V42.667c0-4.719,3.814-8.533,8.533-8.533h290.133c1.092,0,2.116,0.247,3.072,0.623 h0.034c3.166,1.246,5.427,4.292,5.427,7.91V469.333z"/>
                        <polygon points="119.468,51.2 119.468,94.865 163.133,51.2 "/>
                        <polygon points="119.467,312.09 380.356,51.2 332.083,51.2 119.467,263.817 "/>
                        <polygon points="119.467,384.498 392.533,111.432 392.533,63.159 119.467,336.225 "/>
                    </svg>
                    <span class="text-zinc-200 font-semibold text-sm">Daily Curse</span>
                    <span class="text-zinc-500 text-xs">1 Card</span>
                </label>
                <label class="relative flex flex-col items-center gap-3 p-6 border-2 border-red-900/20 bg-zinc-900/50 rounded-xl cursor-pointer transition-all hover:border-horror-blood/50 hover:bg-zinc-900 has-[:checked]:border-horror-bloodLight has-[:checked]:bg-horror-bloodDark/20 has-[:checked]:shadow-[0_0_15px_rgba(255,26,26,0.2)]">
                    <input type="radio" name="spread_type" value="three-card" class="sr-only">
                    <div class="flex gap-2 text-horror-bloodLight drop-shadow-[0_0_5px_rgba(255,26,26,0.5)]">
                        <svg viewBox="0 0 512 512" fill="currentColor" class="w-8 h-8">
                            <path d="M392.533,135.568L119.467,408.635v48.282c0.017-0.017,0.017-0.034,0.034-0.051l273.033-273.024V135.568z"/>
                            <polygon points="392.533,352.785 284.518,460.8 332.792,460.8 392.533,401.058 "/>
                            <polygon points="119.469,167.279 235.54,51.2 187.267,51.2 119.469,118.997 "/>
                            <polygon points="187.983,460.8 392.536,256.247 392.536,207.974 139.702,460.8 "/>
                            <polygon points="259.675,51.2 119.464,191.411 119.464,239.684 307.948,51.2 "/>
                            <polygon points="392.531,280.38 212.119,460.8 260.384,460.8 392.531,328.653 "/>
                            <polygon points="392.534,460.8 392.534,425.19 356.925,460.8 "/>
                            <path d="M418.133,0H93.867c-14.114,0-25.6,11.486-25.6,25.6v460.8c0,14.114,11.486,25.6,25.6,25.6h324.267 c14.114,0,25.6-11.486,25.6-25.6V25.6C443.733,11.486,432.247,0,418.133,0z M409.6,469.333c0,4.719-3.814,8.533-8.533,8.533 H110.933c-4.719,0-8.533-3.814-8.533-8.533V42.667c0-4.719,3.814-8.533,8.533-8.533h290.133c1.092,0,2.116,0.247,3.072,0.623 h0.034c3.166,1.246,5.427,4.292,5.427,7.91V469.333z"/>
                            <polygon points="119.468,51.2 119.468,94.865 163.133,51.2 "/>
                            <polygon points="119.467,312.09 380.356,51.2 332.083,51.2 119.467,263.817 "/>
                            <polygon points="119.467,384.498 392.533,111.432 392.533,63.159 119.467,336.225 "/>
                        </svg>
                        <svg viewBox="0 0 512 512" fill="currentColor" class="w-8 h-8">
                            <path d="M392.533,135.568L119.467,408.635v48.282c0.017-0.017,0.017-0.034,0.034-0.051l273.033-273.024V135.568z"/>
                            <polygon points="392.533,352.785 284.518,460.8 332.792,460.8 392.533,401.058 "/>
                            <polygon points="119.469,167.279 235.54,51.2 187.267,51.2 119.469,118.997 "/>
                            <polygon points="187.983,460.8 392.536,256.247 392.536,207.974 139.702,460.8 "/>
                            <polygon points="259.675,51.2 119.464,191.411 119.464,239.684 307.948,51.2 "/>
                            <polygon points="392.531,280.38 212.119,460.8 260.384,460.8 392.531,328.653 "/>
                            <polygon points="392.534,460.8 392.534,425.19 356.925,460.8 "/>
                            <path d="M418.133,0H93.867c-14.114,0-25.6,11.486-25.6,25.6v460.8c0,14.114,11.486,25.6,25.6,25.6h324.267 c14.114,0,25.6-11.486,25.6-25.6V25.6C443.733,11.486,432.247,0,418.133,0z M409.6,469.333c0,4.719-3.814,8.533-8.533,8.533 H110.933c-4.719,0-8.533-3.814-8.533-8.533V42.667c0-4.719,3.814-8.533,8.533-8.533h290.133c1.092,0,2.116,0.247,3.072,0.623 h0.034c3.166,1.246,5.427,4.292,5.427,7.91V469.333z"/>
                            <polygon points="119.468,51.2 119.468,94.865 163.133,51.2 "/>
                            <polygon points="119.467,312.09 380.356,51.2 332.083,51.2 119.467,263.817 "/>
                            <polygon points="119.467,384.498 392.533,111.432 392.533,63.159 119.467,336.225 "/>
                        </svg>
                        <svg viewBox="0 0 512 512" fill="currentColor" class="w-8 h-8">
                            <path d="M392.533,135.568L119.467,408.635v48.282c0.017-0.017,0.017-0.034,0.034-0.051l273.033-273.024V135.568z"/>
                            <polygon points="392.533,352.785 284.518,460.8 332.792,460.8 392.533,401.058 "/>
                            <polygon points="119.469,167.279 235.54,51.2 187.267,51.2 119.469,118.997 "/>
                            <polygon points="187.983,460.8 392.536,256.247 392.536,207.974 139.702,460.8 "/>
                            <polygon points="259.675,51.2 119.464,191.411 119.464,239.684 307.948,51.2 "/>
                            <polygon points="392.531,280.38 212.119,460.8 260.384,460.8 392.531,328.653 "/>
                            <polygon points="392.534,460.8 392.534,425.19 356.925,460.8 "/>
                            <path d="M418.133,0H93.867c-14.114,0-25.6,11.486-25.6,25.6v460.8c0,14.114,11.486,25.6,25.6,25.6h324.267 c14.114,0,25.6-11.486,25.6-25.6V25.6C443.733,11.486,432.247,0,418.133,0z M409.6,469.333c0,4.719-3.814,8.533-8.533,8.533 H110.933c-4.719,0-8.533-3.814-8.533-8.533V42.667c0-4.719,3.814-8.533,8.533-8.533h290.133c1.092,0,2.116,0.247,3.072,0.623 h0.034c3.166,1.246,5.427,4.292,5.427,7.91V469.333z"/>
                            <polygon points="119.468,51.2 119.468,94.865 163.133,51.2 "/>
                            <polygon points="119.467,312.09 380.356,51.2 332.083,51.2 119.467,263.817 "/>
                            <polygon points="119.467,384.498 392.533,111.432 392.533,63.159 119.467,336.225 "/>
                        </svg>
                    </div>
                    <span class="text-zinc-200 font-semibold text-sm">Past, Present, Future</span>
                    <span class="text-zinc-500 text-xs">3 Cards</span>
                </label>
            </div>
            <button type="submit"
                class="bg-horror-bloodDark hover:bg-horror-blood text-zinc-100 font-medium px-10 py-3 rounded-full tracking-wide text-sm transition-all border border-red-900 shadow-[0_0_15px_rgba(138,3,3,0.5)] hover:shadow-[0_0_25px_rgba(255,26,26,0.6)] transform hover:-translate-y-0.5">
                Summon the Spirits
            </button>
        </form>
    </div>

    @if($readings->count() > 0)
        <div class="bg-zinc-950/80 backdrop-blur-xl border border-red-900/30 shadow-[0_4px_20px_rgba(0,0,0,0.5)] rounded-2xl p-8">
            <h3 class="text-zinc-100 font-semibold text-lg tracking-tight mb-6">Recent Omens</h3>
            <div class="divide-y divide-red-900/20">
                @foreach($readings as $reading)
                    <div class="py-4 flex justify-between items-center text-sm group">
                        <div class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-horror-bloodLight shadow-[0_0_5px_rgba(255,26,26,0.8)]"></span>
                            <span class="text-zinc-300 font-medium group-hover:text-zinc-100 transition-colors">
                                {{ $reading->spread_type === 'single' ? 'Daily Curse' : 'Past, Present, Future' }}
                            </span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="text-zinc-500 text-xs">{{ $reading->created_at->diffForHumans() }}</span>
                            <a href="{{ route('tarot.show', $reading->id) }}" class="text-horror-bloodLight opacity-0 group-hover:opacity-100 transition-opacity hover:text-white drop-shadow-[0_0_3px_rgba(255,26,26,0.8)]">
                                Reveal ➔
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-6 text-center">
                <a href="{{ route('tarot.history') }}" class="inline-block text-zinc-400 text-sm font-medium hover:text-horror-bloodLight hover:underline underline-offset-4 decoration-red-900/50 transition-colors">
                    View the Archives
                </a>
            </div>
        </div>
    @endif
@endsection