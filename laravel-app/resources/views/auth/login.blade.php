@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-16 relative">
        <div class="absolute inset-0 bg-horror-blood/10 blur-[50px] -z-10 rounded-full"></div>
        <div class="bg-zinc-950/80 backdrop-blur-xl border border-red-900/30 shadow-[0_8px_30px_rgba(138,3,3,0.15)] rounded-3xl p-10">
            <h2 class="text-zinc-100 text-3xl font-light tracking-tight text-center mb-2 drop-shadow-[0_0_8px_rgba(255,26,26,0.2)]">Enter the Void</h2>
            <p class="text-center text-zinc-500 text-sm mb-8 font-medium">Welcome back to your dark journey</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-5">
                    <label class="block text-zinc-300 text-xs font-semibold tracking-wider uppercase mb-2">Soul Signature (Email)</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email"
                        class="w-full bg-zinc-900/80 border border-red-900/30 rounded-xl px-4 py-3 text-zinc-200 focus:outline-none focus:ring-2 focus:ring-horror-blood/50 focus:border-horror-bloodLight transition-colors placeholder:text-zinc-600 shadow-[inset_0_2px_4px_rgba(0,0,0,0.6)]">
                    @error('email') <p class="text-horror-bloodLight text-xs mt-2 drop-shadow-[0_0_2px_rgba(255,26,26,0.8)]">{{ $message }}</p> @enderror
                </div>

                <div class="mb-8">
                    <label class="block text-zinc-300 text-xs font-semibold tracking-wider uppercase mb-2">Secret Incantation (Password)</label>
                    <input type="password" name="password" placeholder="Enter your password"
                        class="w-full bg-zinc-900/80 border border-red-900/30 rounded-xl px-4 py-3 text-zinc-200 focus:outline-none focus:ring-2 focus:ring-horror-blood/50 focus:border-horror-bloodLight transition-colors placeholder:text-zinc-600 shadow-[inset_0_2px_4px_rgba(0,0,0,0.6)]">
                    @error('password') <p class="text-horror-bloodLight text-xs mt-2 drop-shadow-[0_0_2px_rgba(255,26,26,0.8)]">{{ $message }}</p> @enderror
                </div>

                <button type="submit"
                    class="w-full bg-horror-bloodDark hover:bg-horror-blood text-white font-medium py-3 rounded-full text-sm transition-all shadow-[0_0_15px_rgba(138,3,3,0.5)] transform hover:-translate-y-0.5 hover:shadow-[0_0_25px_rgba(255,26,26,0.5)]">
                    Cross the Threshold
                </button>
            </form>

            <p class="text-center text-zinc-500 text-sm mt-8">
                Not yet cursed?
                <a href="{{ route('register') }}" class="text-horror-bloodLight font-semibold hover:underline decoration-red-900/50 underline-offset-4 drop-shadow-[0_0_5px_rgba(255,26,26,0.3)]">Sign Up</a>
            </p>
        </div>
    </div>
@endsection