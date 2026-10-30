@extends("layouts.app")

@section("content")



<main class="max-w-6xl mx-auto px-6 pt-32 pb-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        

        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-zinc-700 to-zinc-900 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
            <img src="{{ asset('IMG/Tin.png') }}" alt="Profile" class="relative rounded-lg shadow-2xl w-full object-cover border border-zinc-100 grayscale hover:grayscale-0 transition-all duration-300">
        </div>

    
        <div>
            <h2 class="text-3xl font-bold text-zinc-400 mb-6">Tentang Saya</h2>
            <p class="text-zinc-400 leading-relaxed mb-4">
                Saya adalah seorang mahasiswa program studi Informatika di Universitas Ciputra Makassar (NIM: 2086022510005). Memiliki minat yang mendalam dalam rekayasa perangkat lunak, pengembangan aplikasi *mobile*, dan perancangan *backend*.
            </p>
            <p class="text-zinc-400 leading-relaxed mb-8">
                Selain pemrograman, saya juga aktif berorganisasi dan mengelola komunitas, serta memiliki ketertarikan pada analisis bisnis dan arsitektur *Internet of Things* (IoT).
            </p>
            
            <h3 class="text-xl font-bold text-zinc-200 mb-4 border-b border-zinc-800 pb-2">Tech Stack & Keahlian</h3>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-1.5 bg-zinc-900 border border-zinc-700 rounded text-sm text-zinc-300">Java & OOP</span>
                <span class="px-4 py-1.5 bg-zinc-900 border border-zinc-700 rounded text-sm text-zinc-300">Flutter (Dart)</span>
                <span class="px-4 py-1.5 bg-zinc-900 border border-zinc-700 rounded text-sm text-zinc-300">Laravel</span>
                <span class="px-4 py-1.5 bg-zinc-900 border border-zinc-700 rounded text-sm text-zinc-300">Tailwind CSS</span>
                <span class="px-4 py-1.5 bg-zinc-900 border border-zinc-700 rounded text-sm text-zinc-300">MySQL / Laragon</span>
            </div>
        </div>
    </div>
</main>

@endsection