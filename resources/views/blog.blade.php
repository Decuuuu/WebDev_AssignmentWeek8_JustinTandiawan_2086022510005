@extends("layouts.app")

@section("content")
<main class="max-w-6xl mx-auto px-6 pt-32 pb-16">
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-zinc-100 mb-4">Karya & Proyek</h1>
        <p class="text-zinc-400">Implementasi kode dan eksplorasi teknologi yang telah saya kerjakan.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        
        <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-lg hover:border-zinc-500 transition-all duration-300 hover:-translate-y-1">
            <div class="h-10 w-10 bg-zinc-800 rounded flex items-center justify-center mb-6">
                <svg class="w-6 h-6 text-zinc-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-zinc-100 mb-2">Makan Z Kuy App</h3>
            <p class="text-zinc-400 text-sm mb-4 leading-relaxed">
                Aplikasi mobile multi-screen berbasis Flutter dengan implementasi Material 3 design guidelines, navigasi antar halaman, dan fitur dark mode responsif.
            </p>
            <span class="text-xs font-mono text-zinc-500 uppercase tracking-wider">Flutter • Dart</span>
        </div>

        
        <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-lg hover:border-zinc-500 transition-all duration-300 hover:-translate-y-1">
            <div class="h-10 w-10 bg-zinc-800 rounded flex items-center justify-center mb-6">
                <svg class="w-6 h-6 text-zinc-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-zinc-100 mb-2">Smart Home Hub Controller</h3>
            <p class="text-zinc-400 text-sm mb-4 leading-relaxed">
                Sistem backend berbasis Java yang mengimplementasikan prinsip OOP mendalam termasuk abstract classes, multiple interfaces, dan polymorphic collections untuk perangkat IoT.
            </p>
            <span class="text-xs font-mono text-zinc-500 uppercase tracking-wider">Java • OOP • IoT</span>
        </div>

        
        <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-lg hover:border-zinc-500 transition-all duration-300 hover:-translate-y-1">
            <div class="h-10 w-10 bg-zinc-800 rounded flex items-center justify-center mb-6">
                <svg class="w-6 h-6 text-zinc-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-zinc-100 mb-2">Kamen Rider OOO Simulator</h3>
            <p class="text-zinc-400 text-sm mb-4 leading-relaxed">
                Program simulasi transformasi sabuk yang dirancang menggunakan konsep object-oriented murni, custom exceptions, dan dokumentasi IEEE.
            </p>
            <span class="text-xs font-mono text-zinc-500 uppercase tracking-wider">Java • Generics</span>
        </div>
    </div>
</main>

@endsection