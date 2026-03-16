<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,5014792,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?5014792&101" alt="javascript hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetComfort Hub - Trusted Pet Care Services</title>
    <meta name="description" content="Professional pet sitting, dog walking, grooming, and wellness services across the United States. Trusted by thousands of pet owners.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-white">
    <!-- Header -->
    <header id="header" class="bg-white border-b sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="index.html" class="flex items-center gap-2">
                    <div class="bg-blue-600 p-2 rounded-lg">
                        <i data-lucide="paw-print" class="h-6 w-6 text-white"></i>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-gray-900">PetComfort Hub</h1>
                        <p class="text-xs text-gray-600">Trusted Pet Care Services</p>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-6">
                    <a href="index.html" class="text-blue-600 font-semibold transition-colors">Home</a>
                    <a href="about.html" class="text-gray-700 hover:text-blue-600 transition-colors">About</a>
                    <a href="services.html" class="text-gray-700 hover:text-blue-600 transition-colors">Services</a>
                    <a href="contact.html" class="text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
                    <button onclick="openContactPopup()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors">
                        Book Pet Care
                    </button>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2" aria-label="Toggle menu">
                    <i data-lucide="menu" class="h-6 w-6"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-menu" class="md:hidden pt-4 pb-2 flex-col gap-3 hidden">
                <a href="index.html" class="py-2 text-blue-600 font-semibold transition-colors block">Home</a>
                <a href="about.html" class="py-2 text-gray-700 transition-colors block">About</a>
                <a href="services.html" class="py-2 text-gray-700 transition-colors block">Services</a>
                <a href="contact.html" class="py-2 text-gray-700 transition-colors block">Contact</a>
                <button onclick="openContactPopup()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md w-full transition-colors">
                    Book Pet Care
                </button>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-blue-50 to-green-50 py-20 lg:py-32">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                            Trusted Pet Care Services for Your Beloved Companions
                        </h1>
                        <p class="text-lg text-gray-700 mb-8">
                            PetComfort Hub provides professional pet sitting, dog walking, grooming, 
                            and wellness services across the United States.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button onclick="openContactPopup()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md text-lg transition-colors">
                                Book Pet Care
                            </button>
                            <button onclick="openContactPopup()" class="border border-gray-300 hover:bg-gray-50 px-6 py-3 rounded-md text-lg transition-colors">
                                Get Free Consultation
                            </button>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1768254018855-1dd9ca762caa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoYXBweSUyMHBldCUyMG93bmVyJTIwZG9nfGVufDF8fHx8MTc3MzMzMDA1M3ww&ixlib=rb-4.1.0&q=80&w=1080"
                            alt="Happy pet owner with dog"
                            class="rounded-2xl shadow-2xl w-full">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Preview -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 text-center max-w-3xl">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    About PetComfort Hub
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    At PetComfort Hub, our mission is to provide safe and loving care for your pets. 
                    We understand that pets are family members, and they deserve the best care possible. 
                    Our team of certified professionals is dedicated to ensuring your pet's happiness, 
                    health, and well-being while you're away or busy.
                </p>
                <a href="about.html" class="inline-block mt-4 text-blue-600 hover:underline">
                    Learn More About Us →
                </a>
            </div>
        </section>

        <!-- Services Overview -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        Our Services
                    </h2>
                    <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                        Comprehensive pet care solutions tailored to meet your pet's unique needs
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Service Card 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1758876569618-6c9fef8e0303?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoYXBweSUyMGRvZyUyMHdhbGtpbmclMjBwcm9mZXNzaW9uYWx8ZW58MXx8fHwxNzczMzMwMDUxfDA&ixlib=rb-4.1.0&q=80&w=1080"
                                alt="Dog Walking" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="bg-blue-100 p-2 rounded-lg">
                                    <i data-lucide="paw-print" class="h-6 w-6 text-blue-600"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Dog Walking</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Daily walks to keep dogs active and healthy</p>
                            <a href="services.html" class="text-blue-600 hover:underline">Learn More →</a>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1668522907255-62950845ff46?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwZXQlMjBzaXR0ZXIlMjBjYXJpbmclMjBkb2d8ZW58MXx8fHwxNzczMzMwMDUyfDA&ixlib=rb-4.1.0&q=80&w=1080"
                                alt="Pet Sitting" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="bg-blue-100 p-2 rounded-lg">
                                    <i data-lucide="heart" class="h-6 w-6 text-blue-600"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Pet Sitting</h3>
                            </div>
                            <p class="text-gray-600 mb-4">In-home care while you're away</p>
                            <a href="services.html" class="text-blue-600 hover:underline">Learn More →</a>
                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1725419876939-f8f9987cf0d2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjYXQlMjBiZWluZyUyMGdyb29tZWQlMjBwcm9mZXNzaW9uYWxseXxlbnwxfHx8fDE3NzMzMzAwNTF8MA&ixlib=rb-4.1.0&q=80&w=1080"
                                alt="Pet Grooming" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="bg-blue-100 p-2 rounded-lg">
                                    <i data-lucide="paw-print" class="h-6 w-6 text-blue-600"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Pet Grooming</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Professional grooming and bathing</p>
                            <a href="services.html" class="text-blue-600 hover:underline">Learn More →</a>
                        </div>
                    </div>

                    <!-- Service Card 4 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1743763959056-41bbb557272d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwZXQlMjBib2FyZGluZyUyMGtlbm5lbHxlbnwxfHx8fDE3NzMyMTQ3MDN8MA&ixlib=rb-4.1.0&q=80&w=1080"
                                alt="Pet Boarding" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="bg-blue-100 p-2 rounded-lg">
                                    <i data-lucide="shield" class="h-6 w-6 text-blue-600"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Pet Boarding</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Comfortable temporary care in a safe environment</p>
                            <a href="services.html" class="text-blue-600 hover:underline">Learn More →</a>
                        </div>
                    </div>

                    <!-- Service Card 5 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1625321171045-1fea4ac688e9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2ZXRlcmluYXJ5JTIwd2VsbG5lc3MlMjBjaGVja3xlbnwxfHx8fDE3NzMzMzAwNTN8MA&ixlib=rb-4.1.0&q=80&w=1080"
                                alt="Pet Wellness Check" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="bg-blue-100 p-2 rounded-lg">
                                    <i data-lucide="heart" class="h-6 w-6 text-blue-600"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Pet Wellness Check</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Basic health monitoring and observation</p>
                            <a href="services.html" class="text-blue-600 hover:underline">Learn More →</a>
                        </div>
                    </div>

                    <!-- Service Card 6 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1759747548874-8198967d7004?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxraXR0ZW4lMjBjYXJlJTIwY3V0ZXxlbnwxfHx8fDE3NzMzMzAwNTR8MA&ixlib=rb-4.1.0&q=80&w=1080"
                                alt="Puppy & Kitten Care" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="bg-blue-100 p-2 rounded-lg">
                                    <i data-lucide="paw-print" class="h-6 w-6 text-blue-600"></i>
                                </div>
                                <h3 class="text-xl font-semibold">Puppy & Kitten Care</h3>
                            </div>
                            <p class="text-gray-600 mb-4">Special care for young pets</p>
                            <a href="services.html" class="text-blue-600 hover:underline">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        Why Choose PetComfort Hub
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="shield" class="h-8 w-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Certified Professionals</h3>
                        <p class="text-gray-600">All our pet care staff are certified and background-checked</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="heart" class="h-8 w-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Safe & Loving Environment</h3>
                        <p class="text-gray-600">Your pets receive care in a secure and affectionate setting</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="clock" class="h-8 w-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Flexible Scheduling</h3>
                        <p class="text-gray-600">Book services at times that work best for you</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="dollar-sign" class="h-8 w-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Affordable Pricing</h3>
                        <p class="text-gray-600">Quality pet care at competitive rates</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="users" class="h-8 w-8 text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Trusted by Pet Owners</h3>
                        <p class="text-gray-600">Thousands of happy pets and satisfied owners</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Overview -->
        <section class="py-16 bg-blue-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        Pricing Plans
                    </h2>
                    <p class="text-lg text-gray-700">
                        Affordable pet care packages designed for every need
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <!-- Starter Plan -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="text-center">
                            <h3 class="text-2xl font-semibold mb-4">Starter Care</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-gray-900">$25</span>
                                <span class="text-gray-600">/ visit</span>
                            </div>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">30 minute pet visit</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">Feeding and fresh water</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">Playtime and attention</span>
                            </li>
                        </ul>
                        <button onclick="openContactPopup()" class="w-full border border-gray-300 hover:bg-gray-50 px-4 py-2 rounded-md transition-colors">
                            Book Your Pet Care Today
                        </button>
                    </div>

                    <!-- Standard Plan (Most Popular) -->
                    <div class="bg-white rounded-lg shadow-xl border-2 border-blue-600 p-6 relative">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="text-2xl font-semibold mb-4">Standard Care</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-gray-900">$45</span>
                                <span class="text-gray-600">/ visit</span>
                            </div>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">60 minute visit</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">Feeding and medication support</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">Walk and exercise</span>
                            </li>
                        </ul>
                        <button onclick="openContactPopup()" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors">
                            Book Your Pet Care Today
                        </button>
                    </div>

                    <!-- Premium Plan -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="text-center">
                            <h3 class="text-2xl font-semibold mb-4">Premium Care</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-gray-900">$75</span>
                                <span class="text-gray-600">/ visit</span>
                            </div>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">Extended pet care session</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">Grooming and wellness check</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i data-lucide="check" class="h-5 w-5 text-green-600 flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-700">Daily updates and photos</span>
                            </li>
                        </ul>
                        <button onclick="openContactPopup()" class="w-full border border-gray-300 hover:bg-gray-50 px-4 py-2 rounded-md transition-colors">
                            Book Your Pet Care Today
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        What Pet Owners Say
                    </h2>
                    <p class="text-lg text-gray-700">
                        Don't just take our word for it
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex gap-1 mb-4">
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-1">Sarah Johnson</h3>
                        <p class="text-gray-600 text-sm mb-4">Austin, TX</p>
                        <p class="text-gray-700 italic">"PetComfort Hub has been a lifesaver! My golden retriever Max loves his daily walks with them. The staff is professional, caring, and always sends me updates with photos."</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex gap-1 mb-4">
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-1">Michael Chen</h3>
                        <p class="text-gray-600 text-sm mb-4">Dallas, TX</p>
                        <p class="text-gray-700 italic">"I travel frequently for work and needed reliable pet sitting for my two cats. PetComfort Hub exceeded my expectations. They're trustworthy and my cats are always happy when I return."</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex gap-1 mb-4">
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                            <i data-lucide="star" class="h-5 w-5 fill-yellow-400 text-yellow-400"></i>
                        </div>
                        <h3 class="font-semibold text-lg mb-1">Emily Rodriguez</h3>
                        <p class="text-gray-600 text-sm mb-4">Houston, TX</p>
                        <p class="text-gray-700 italic">"The grooming service is fantastic! My poodle looks amazing after every visit. The team is gentle, patient, and truly loves what they do. Highly recommended!"</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-blue-600 to-green-600 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                    Give Your Pet the Care They Deserve
                </h2>
                <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                    Join thousands of satisfied pet owners who trust PetComfort Hub
                </p>
                <button onclick="openContactPopup()" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-md text-lg font-semibold transition-colors">
                    Book Service Now
                </button>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="bg-gray-900 text-gray-300">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="bg-blue-600 p-2 rounded-lg">
                            <i data-lucide="paw-print" class="h-5 w-5 text-white"></i>
                        </div>
                        <h3 class="font-bold text-white text-lg">PetComfort Hub</h3>
                    </div>
                    <p class="text-sm mb-4">
                        Professional pet care services for your beloved companions across the United States.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-white mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="index.html" class="hover:text-blue-400 transition-colors">Home</a></li>
                        <li><a href="about.html" class="hover:text-blue-400 transition-colors">About</a></li>
                        <li><a href="services.html" class="hover:text-blue-400 transition-colors">Services</a></li>
                        <li><a href="contact.html" class="hover:text-blue-400 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h4 class="font-semibold text-white mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="privacy-policy.html" class="hover:text-blue-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="terms-conditions.html" class="hover:text-blue-400 transition-colors">Terms and Conditions</a></li>
                        <li><a href="disclaimer.html" class="hover:text-blue-400 transition-colors">Disclaimer</a></li>
                        <li><a href="cookie-policy.html" class="hover:text-blue-400 transition-colors">Cookie Policy</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="font-semibold text-white mb-4">Contact Info</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex gap-2">
                            <i data-lucide="map-pin" class="h-5 w-5 flex-shrink-0 text-blue-400"></i>
                            <span>
                                10222 Desert Sands St Ste 204<br>
                                San Antonio, TX 78116<br>
                                United States
                            </span>
                        </li>
                        <li class="flex gap-2 items-center">
                            <i data-lucide="phone" class="h-5 w-5 flex-shrink-0 text-blue-400"></i>
                            <a href="tel:+19253069647" class="hover:text-blue-400 transition-colors">+1-925-306-9647</a>
                        </li>
                        <li class="flex gap-2 items-center">
                            <i data-lucide="mail" class="h-5 w-5 flex-shrink-0 text-blue-400"></i>
                            <a href="mailto:help@petcomforthub.site" class="hover:text-blue-400 transition-colors">help@petcomforthub.site</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm">
                <p>&copy; <span id="current-year"></span> PetComfort Hub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Cookie Banner -->
    <div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-gray-900 text-white p-4 shadow-lg z-50 hidden">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div class="flex-1">
                    <p class="text-sm">
                        We use cookies to improve your browsing experience and analyze website traffic. 
                        By clicking 'Accept', you consent to our cookie policy. 
                        <a href="cookie-policy.html" class="underline hover:text-blue-400 transition-colors">Learn More</a>
                    </p>
                </div>
                <div class="flex gap-2 flex-shrink-0">
                    <button onclick="rejectCookies()" class="border border-white text-white hover:bg-white hover:text-gray-900 px-4 py-2 rounded-md text-sm transition-colors">
                        Reject
                    </button>
                    <button onclick="acceptCookies()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm transition-colors">
                        Accept
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Popup -->
    <div id="contact-popup" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4" style="display: none;">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold">Book Pet Care Service</h2>
                    <button onclick="closeContactPopup()" class="text-gray-500 hover:text-gray-700">
                        <i data-lucide="x" class="h-6 w-6"></i>
                    </button>
                </div>
                
                <form id="popup-contact-form" class="space-y-4">
                    <div>
                        <label for="popup-name" class="block text-sm font-medium mb-1">Name *</label>
                        <input type="text" id="popup-name" required placeholder="Your full name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="popup-email" class="block text-sm font-medium mb-1">Email *</label>
                        <input type="email" id="popup-email" required placeholder="your.email@example.com" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="popup-phone" class="block text-sm font-medium mb-1">Phone *</label>
                        <input type="tel" id="popup-phone" required placeholder="+1-XXX-XXX-XXXX" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="popup-service" class="block text-sm font-medium mb-1">Service Required *</label>
                        <select id="popup-service" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select a service</option>
                            <option value="dog-walking">Dog Walking</option>
                            <option value="pet-sitting">Pet Sitting</option>
                            <option value="grooming">Pet Grooming</option>
                            <option value="boarding">Pet Boarding</option>
                            <option value="wellness">Pet Wellness Check</option>
                            <option value="puppy-kitten">Puppy & Kitten Care</option>
                        </select>
                    </div>

                    <div>
                        <label for="popup-message" class="block text-sm font-medium mb-1">Message</label>
                        <textarea id="popup-message" rows="4" placeholder="Tell us about your pet care needs..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <div class="flex items-start gap-2">
                        <input type="checkbox" id="popup-policy" required class="mt-1">
                        <label for="popup-policy" class="text-sm">
                            I agree to the 
                            <a href="privacy-policy.html" class="text-blue-600 hover:underline">Privacy Policy</a> 
                            and 
                            <a href="terms-conditions.html" class="text-blue-600 hover:underline">Terms & Conditions</a>.
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors">
                        Submit Request
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="fixed top-4 right-4 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg hidden z-50">
        <p id="toast-message"></p>
    </div>

    <!-- Scripts -->
    <script src="js/main.js"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>
