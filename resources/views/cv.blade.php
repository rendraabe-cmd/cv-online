<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }} — {{ $title }}</title>
    <meta name="description" content="{{ $title }} — Professional CV of {{ $name }}">
    @vite(['resources/css/app.css'])
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        @keyframes glow {
            0%, 100% { box-shadow: 0 0 20px rgba(212, 175, 55, 0.3); }
            50% { box-shadow: 0 0 30px rgba(212, 175, 55, 0.6); }
        }
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }
        .animate-fade { animation: fadeInUp 0.7s ease-out forwards; opacity: 0; }
        .animate-float { animation: float 4s ease-in-out infinite; }
        .animate-glow { animation: glow 3s ease-in-out infinite; }

        .gold-text {
            background: linear-gradient(135deg, #d4af37 0%, #f9e29c 25%, #d4af37 50%, #b8941f 75%, #d4af37 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 4s linear infinite;
        }
        .gold-border {
            border: 1px solid rgba(212, 175, 55, 0.3);
        }
        .gold-bg-soft {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.08), rgba(212, 175, 55, 0.02));
        }
        .premium-bg {
            background: #0a0e1a;
            background-image:
                radial-gradient(at 20% 30%, rgba(16, 185, 129, 0.08) 0px, transparent 50%),
                radial-gradient(at 80% 70%, rgba(212, 175, 55, 0.08) 0px, transparent 50%),
                radial-gradient(at 50% 50%, rgba(15, 23, 42, 0.5) 0px, transparent 50%);
        }
        .luxury-card {
            background: linear-gradient(145deg, rgba(20, 25, 40, 0.7), rgba(15, 20, 35, 0.5));
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(212, 175, 55, 0.15);
        }
        .luxury-card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .luxury-card-hover:hover {
            transform: translateY(-3px);
            border-color: rgba(212, 175, 55, 0.4);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 30px rgba(212, 175, 55, 0.1);
        }
        .skill-tag {
            transition: all 0.3s ease;
        }
        .skill-tag:hover {
            transform: translateY(-2px);
            border-color: rgba(212, 175, 55, 0.6);
            color: #f9e29c !important;
        }
        .section-divider {
            background: linear-gradient(90deg, rgba(212, 175, 55, 0.5), transparent);
            height: 1px;
            flex: 1;
        }
        .icon-luxury {
            background: linear-gradient(135deg, #1a1f2e, #0a0e1a);
            border: 1px solid rgba(212, 175, 55, 0.3);
            color: #d4af37;
        }
        .emerald-accent {
            color: #10b981;
        }
        .profile-ring {
            background: linear-gradient(135deg, #d4af37, #f9e29c, #d4af37);
            padding: 3px;
        }
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; color: black !important; }
            .premium-bg { background: white !important; }
            .luxury-card { background: white !important; border: 1px solid #ddd !important; backdrop-filter: none !important; }
        }
    </style>
</head>
<body class="premium-bg min-h-screen font-sans text-gray-200">

    <!-- Floating Action Buttons -->
    <div class="no-print fixed top-6 right-6 z-50 flex gap-3">
        <a href="{{ route('cv.download') }}"
           class="group inline-flex items-center gap-2 px-5 py-3 bg-gradient-to-r from-yellow-600 to-yellow-500 hover:from-yellow-500 hover:to-yellow-400 text-gray-900 text-sm font-bold rounded-lg shadow-2xl shadow-yellow-500/40 transition-all hover:scale-105 animate-glow">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
            Download PDF
        </a>
        <button onclick="window.print()"
           class="inline-flex items-center gap-2 px-5 py-3 luxury-card text-yellow-200 text-sm font-bold rounded-lg shadow-2xl transition-all hover:scale-105">
            🖨️ Print
        </button>
    </div>

    <!-- Subtle Background Decorations -->
    <div class="fixed top-1/4 left-10 w-72 h-72 bg-emerald-500 rounded-full mix-blend-screen filter blur-3xl opacity-10"></div>
    <div class="fixed bottom-1/4 right-10 w-96 h-96 bg-yellow-500 rounded-full mix-blend-screen filter blur-3xl opacity-10"></div>

    <!-- CV Container -->
    <div class="relative max-w-5xl mx-auto px-4 py-10">

        <!-- HEADER CARD -->
        <div class="luxury-card rounded-2xl overflow-hidden shadow-2xl mb-6 animate-fade">
            <!-- Top gold accent bar -->
            <div class="h-1 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>

            <div class="relative p-10">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Profile Photo from GitHub -->
                    <div class="relative animate-float flex-shrink-0">
                        <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-700 rounded-full blur-xl opacity-50"></div>
                        <div class="relative profile-ring rounded-full">
                            <img src="https://github.com/rendraabe-cmd.png"
                                 alt="{{ $name }}"
                                 class="w-32 h-32 rounded-full object-cover border-2 border-gray-900"
                                 onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Achmad+Rendra&size=200&background=d4af37&color=0a0e1a&bold=true';">
                        </div>
                        <!-- Online badge -->
                        <div class="absolute bottom-1 right-1 w-6 h-6 bg-emerald-500 rounded-full border-4 border-gray-900 flex items-center justify-center">
                            <span class="w-2 h-2 bg-white rounded-full"></span>
                        </div>
                    </div>

                    <div class="text-center md:text-left flex-1">
                        <!-- Availability Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 mb-3 bg-emerald-500/10 gold-border rounded-full text-emerald-400 text-xs font-semibold tracking-wider uppercase">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            Open to Remote Opportunities
                        </div>

                        <h1 class="text-4xl md:text-5xl font-black gold-text leading-tight tracking-tight">
                            {{ $name }}
                        </h1>
                        <p class="text-xl mt-2 font-semibold text-white">{{ $title }}</p>
                        <p class="text-sm mt-1 text-yellow-300/80 font-medium tracking-wide">{{ $subtitle }}</p>

                        <!-- Contact Pills -->
                        <div class="mt-5 flex flex-wrap justify-center md:justify-start gap-2">
                            <a href="mailto:{{ $email }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/5 hover:bg-yellow-500/10 gold-border rounded-md text-xs text-gray-300 hover:text-yellow-200 transition">
                                <span class="text-yellow-500">✉</span> {{ $email }}
                            </a>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/5 gold-border rounded-md text-xs text-gray-300">
                                <span class="text-yellow-500">☎</span> {{ $phone }}
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/5 gold-border rounded-md text-xs text-gray-300">
                                <span class="text-yellow-500">◉</span> {{ $location }}
                            </span>
                            <a href="{{ $githubUrl }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/5 hover:bg-yellow-500/10 gold-border rounded-md text-xs text-gray-300 hover:text-yellow-200 transition">
                                <span class="text-yellow-500">⌘</span> {{ $github }}
                            </a>
                            <a href="{{ $websiteUrl }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/5 hover:bg-yellow-500/10 gold-border rounded-md text-xs text-gray-300 hover:text-yellow-200 transition">
                                <span class="text-yellow-500">◈</span> Portfolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom gold accent bar -->
            <div class="h-1 bg-gradient-to-r from-transparent via-yellow-500/50 to-transparent"></div>
        </div>

        <!-- STATS SHOWCASE -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="luxury-card rounded-xl p-5 text-center luxury-card-hover animate-fade" style="animation-delay: 0.1s;">
                <div class="text-3xl font-black gold-text">04+</div>
                <div class="text-xs text-gray-400 mt-1 font-medium uppercase tracking-wider">Live Projects</div>
            </div>
            <div class="luxury-card rounded-xl p-5 text-center luxury-card-hover animate-fade" style="animation-delay: 0.2s;">
                <div class="text-3xl font-black gold-text">03+</div>
                <div class="text-xs text-gray-400 mt-1 font-medium uppercase tracking-wider">Years Coding</div>
            </div>
            <div class="luxury-card rounded-xl p-5 text-center luxury-card-hover animate-fade" style="animation-delay: 0.3s;">
                <div class="text-3xl font-black gold-text">20+</div>
                <div class="text-xs text-gray-400 mt-1 font-medium uppercase tracking-wider">API Endpoints</div>
            </div>
            <div class="luxury-card rounded-xl p-5 text-center luxury-card-hover animate-fade" style="animation-delay: 0.4s;">
                <div class="text-3xl font-black gold-text">100%</div>
                <div class="text-xs text-gray-400 mt-1 font-medium uppercase tracking-wider">Cloud Deployed</div>
            </div>
        </div>

        <!-- SUMMARY -->
        <div class="luxury-card rounded-xl p-7 mb-6 luxury-card-hover animate-fade" style="animation-delay: 0.5s;">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-lg icon-luxury flex items-center justify-center text-lg font-bold">01</div>
                <h2 class="text-lg font-bold text-white uppercase tracking-widest">About</h2>
                <div class="section-divider"></div>
            </div>
            <p class="text-gray-300 leading-relaxed text-sm pl-13">{{ $summary }}</p>
        </div>

        <!-- SKILLS -->
        <div class="luxury-card rounded-xl p-7 mb-6 luxury-card-hover animate-fade" style="animation-delay: 0.6s;">
            <div class="flex items-center gap-3 mb-5">
                <div class="w-10 h-10 rounded-lg icon-luxury flex items-center justify-center text-lg font-bold">02</div>
                <h2 class="text-lg font-bold text-white uppercase tracking-widest">Expertise</h2>
                <div class="section-divider"></div>
            </div>
            <div class="space-y-4">
                @foreach($skills as $category => $items)
                    <div>
                        <div class="text-xs font-bold text-yellow-500 uppercase tracking-widest mb-2.5">— {{ $category }}</div>
                        <div class="flex flex-wrap gap-2">
                            @foreach($items as $skill)
                                <span class="skill-tag px-3 py-1.5 gold-bg-soft gold-border text-gray-200 text-xs font-medium rounded-md">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- PROJECTS -->
        <div class="luxury-card rounded-xl p-7 mb-6 animate-fade" style="animation-delay: 0.7s;">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg icon-luxury flex items-center justify-center text-lg font-bold">03</div>
                <h2 class="text-lg font-bold text-white uppercase tracking-widest">Featured Work</h2>
                <span class="px-2 py-0.5 bg-emerald-500/20 emerald-accent text-xs font-bold rounded border border-emerald-500/30 uppercase tracking-wider">Live</span>
                <div class="section-divider"></div>
            </div>
            <div class="space-y-5">
                @foreach($projects as $i => $p)
                    <div class="relative gold-bg-soft rounded-xl p-5 border-l-2 border-yellow-500 luxury-card-hover">
                        <div class="absolute -left-3 top-5 w-7 h-7 bg-gradient-to-br from-yellow-500 to-yellow-700 rounded-full flex items-center justify-center text-gray-900 font-black text-xs shadow-lg">{{ sprintf('%02d', $i + 1) }}</div>
                        <div class="flex justify-between items-start flex-wrap gap-2 mb-1 ml-5">
                            <h3 class="font-bold text-white text-base">{{ $p['title'] }}</h3>
                            <span class="text-xs text-yellow-300 font-semibold gold-bg-soft gold-border px-3 py-0.5 rounded-full">{{ $p['date'] }}</span>
                        </div>
                        <p class="text-xs text-yellow-500/80 italic mb-3 ml-5 font-medium">{{ $p['stack'] }}</p>
                        <ul class="space-y-1.5 ml-5">
                            @foreach($p['points'] as $point)
                                <li class="flex gap-2 text-sm text-gray-300">
                                    <span class="emerald-accent mt-0.5 font-bold">✓</span>
                                    <span>{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-3 ml-5 flex flex-wrap gap-2">
                            @foreach($p['links'] as $link)
                                <a href="{{ $link['url'] }}" target="_blank" class="inline-flex items-center gap-1 px-3 py-1 bg-gradient-to-r from-yellow-600/20 to-yellow-500/20 hover:from-yellow-600/40 hover:to-yellow-500/40 gold-border text-yellow-200 text-xs font-semibold rounded-md transition">
                                    → {{ $link['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- EXPERIENCE -->
        <div class="luxury-card rounded-xl p-7 mb-6 luxury-card-hover animate-fade" style="animation-delay: 0.8s;">
            <div class="flex items-center gap-3 mb-5">
                <div class="w-10 h-10 rounded-lg icon-luxury flex items-center justify-center text-lg font-bold">04</div>
                <h2 class="text-lg font-bold text-white uppercase tracking-widest">Experience</h2>
                <div class="section-divider"></div>
            </div>
            @foreach($experience as $exp)
                <div>
                    <div class="flex justify-between items-start flex-wrap gap-2 mb-1">
                        <h3 class="font-bold text-white text-base">{{ $exp['role'] }}</h3>
                        <span class="text-xs text-yellow-300 font-semibold gold-bg-soft gold-border px-3 py-0.5 rounded-full">{{ $exp['date'] }}</span>
                    </div>
                    <p class="text-sm text-yellow-500/80 italic mb-3 font-medium">{{ $exp['company'] }}</p>
                    <ul class="space-y-1.5">
                        @foreach($exp['points'] as $point)
                            <li class="flex gap-2 text-sm text-gray-300">
                                <span class="text-yellow-500 mt-0.5">▸</span>
                                <span>{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <!-- TWO COLS: EDU + LANG -->
        <div class="grid md:grid-cols-2 gap-6 mb-6">
            <!-- EDUCATION -->
            <div class="luxury-card rounded-xl p-7 luxury-card-hover animate-fade" style="animation-delay: 0.9s;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg icon-luxury flex items-center justify-center text-lg font-bold">05</div>
                    <h2 class="text-lg font-bold text-white uppercase tracking-widest">Education</h2>
                </div>
                @foreach($education as $edu)
                    <div>
                        <h3 class="font-bold text-white text-sm">{{ $edu['degree'] }}</h3>
                        <p class="text-sm text-yellow-500/80 italic mt-0.5 font-medium">{{ $edu['school'] }}</p>
                        <p class="text-xs text-gray-400 mt-1">{{ $edu['date'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- LANGUAGES -->
            <div class="luxury-card rounded-xl p-7 luxury-card-hover animate-fade" style="animation-delay: 1s;">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg icon-luxury flex items-center justify-center text-lg font-bold">06</div>
                    <h2 class="text-lg font-bold text-white uppercase tracking-widest">Languages</h2>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($languages as $lang)
                        <span class="px-3 py-2 gold-bg-soft gold-border text-gray-200 text-xs font-medium rounded-md">{{ $lang }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="luxury-card rounded-xl p-5 text-center text-xs text-gray-400 animate-fade" style="animation-delay: 1.1s;">
            <p>Crafted with <span class="text-yellow-500">◆</span> using <span class="text-yellow-300 font-semibold">Laravel 11</span> · <span class="text-yellow-300 font-semibold">Tailwind CSS</span> · <span class="text-yellow-300 font-semibold">DomPDF</span></p>
            <p class="mt-2 text-yellow-500/60 tracking-widest text-[10px]">© {{ date('Y') }} {{ strtoupper($name) }} — <a href="{{ $githubUrl }}" class="hover:text-yellow-300 transition">VIEW SOURCE</a></p>
        </div>

    </div>

</body>
</html>
