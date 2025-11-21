<footer class="bg-base10">
    <section class="">
        <div class="flex flex-col sm:flex-row items-center sm:items-start text-white gap-6 sm:gap-8 p-4 w-full">

            
            <div class="w-full sm:w-1/6 flex justify-sta sm:justify-start items-center bg-base30 p-4">
                <img src='{{ asset('images/romcypets.webp') }}' alt="RomcyPets" class="h-auto"
                    style="max-height: 100px;">
            </div>

            {{-- Opciones: 2/6 del ancho --}}
            <div class="w-full sm:w-2/6">
                <h3 class="text-xl font-semibold mb-2 border-b-2 border-orange-500 pb-1 inline-block">Descubre</h3>
                <nav>
                    <ul class="text-sm space-y-1">
                        <li><a href="#" class="hover:text-orange-500 transition-colors duration-300">productos</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors duration-300">Servicios</a></li>
                        <li><a href="/contacto" class="hover:text-orange-500 transition-colors duration-300">Contacto</a></li>
                        
                    </ul>
                </nav>
            </div>

            
            <div class="w-full sm:w-1/2">
                <img src='{{ asset('images/feliz-navidad.webp') }}' alt="RomcyPets" class="h-auto w-full">
            </div>

        </div>
        <div class="text-base10 text-sm mt-2 text-center bg-base60 py-2 mb-0">
            Copyright {{ date('Y') }} - <a href="/aviso-de-privacidad">Aviso de privacidad</a>
        </div>


    </section>
</footer>
