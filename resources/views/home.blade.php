@extends("layouts.app")

@section("content")
<main class="flex-grow flex items-center justify-center px-6 pt-20">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-zinc-500 uppercase tracking-[0.3em] mb-4 text-sm font-semibold">Software Engineer & Developer</p>
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight text-transparent bg-clip-text bg-gradient-to-b from-zinc-100 to-zinc-500">
            Justin Tandiawan
        </h1>
        <p class="text-lg md:text-xl text-zinc-400 max-w-2xl mx-auto leading-relaxed mb-10">
            Membangun solusi digital yang elegan, efisien, dan responsif. Berfokus pada pengembangan aplikasi modern dengan arsitektur perangkat lunak yang solid.
        </p>
        <div class="flex justify-center gap-4">
            <a href="/blog" class="px-8 py-3 bg-zinc-200 text-zinc-900 font-semibold rounded hover:bg-white transition-all shadow-[0_0_15px_rgba(255,255,255,0.1)]">
                Lihat Karya
            </a>
            <a href="/contact" class="px-8 py-3 border border-zinc-700 text-zinc-300 font-semibold rounded hover:bg-zinc-800 transition-all">
                Hubungi Saya
            </a>
        </div>
    </div>
</main>

@endsection