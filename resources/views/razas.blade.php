@extends('layouts.app')



@section('content')
<div class="div wrapper">
        <nav class="flex bg-base30 text-white border border-gray-200 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                <a href="/" class="text-sm text-base60 hover:text-base10 inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Inicio
                </a>
                </li>
                <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <h2  class=" text-base60 hover:text-bas30 ml-1 md:ml-2 text-sm font-medium ">Razas</h2>
                </div>
                </li>
            </ol>
        </nav>
    </div>

    <section class="container grid grid-cols-1 md:grid-cols-2 gap-8 p-0 my-6 -centrado">
        
        <!-- Left column -->
        <div class="pt-5">
            <img src='{{ asset('images/shih-tzu-raza.webp') }}' class="w-full">  
        </div>

        <!-- Right column -->
        <div class="p-0 pb-0">
            
                <h2>Shih Tzu</h2>
                <p>Shih Tzu: elegancia, ternura y compañía incondicional  </p>

                <p>El shih tzu es una de las razas más encantadoras por su carácter dulce, su mirada expresiva y su capacidad de crear vínculos profundos con su familia. es el compañero ideal para quienes buscan amor, cercanía y una conexión genuina día a día.</p>

                <br>
                <h2>¿por qué elegir un shih tzu? </h2>

                <ul class="-lista">
                    <li><p>Perfectos para casa o departamento  </p></li>
                    <li><p>Extremadamente cariñosos y sociables </p></li>
                    <li><p>Ideales para familias, niños o personas que buscan compañía constante  </p></li>
                    <li><p>Personalidad tranquila, amorosa y adaptable  </p></li>
                </ul>
                <br>
                <h2>Cuidados básicos</h2>
                <ul>
                    <li><p>Cepillado frecuente para mantener su pelaje sano y hermoso </p></li>
                    <li><p>Alimentación de alta calidad  </p></li>
                    <li><p>Revisiones veterinarias periódicas  </p></li>
                    <li><p>Atención, cariño y acompañamiento constante  </p></li>
                </ul>
                <br>
                <h2>En Romcy Pets</h2>
                <p>Criamos shih tzu con un enfoque completamente responsable, priorizando su salud, genética y bienestar emocional.   </p>  
                <p>Cada cachorro crece en un ambiente lleno de amor, cuidado y respeto por su desarrollo.</p>
                
                <br>
                <h2>Lo que nadie te dice antes de tener un shih tzu…  y que necesitas saber antes de elegirlo</h2>

                <p class="font-bold">Son extremadamente apegados  </p>
                <p>No les gusta sentirse solos, aman la compañía, son falderos</p>

                <p class="font-bold">Requieren cuidado en su pelaje  </p>
                <p>Su belleza necesita mantenimiento constante, esta raza tambn permite diferentes tipos de corte de pelo q sean practicos según su stilo de vida</p>

                <p class="font-bold">Son muy sensibles  </p>
                <p>Necesitan amor, paciencia y un ambiente tranquilo.</p>

                <p class="font-bold">No son solo “de adorno”  </p>
                <p>Tienen personalidad, emociones y necesidades reales.</p>

                <p class="font-bold">Te roban el corazón   </p>
                <p>Se vuelven parte de tu vida completamente.

        </div>

    </section>

    <section class="container grid grid-cols-1 md:grid-cols-2 gap-8 p-0 my-6 -centrado">
        
        <!-- Left column -->
        <div class="pt-5">
            <img src='{{ asset('images/pomeranian.webp') }}' class="w-full">
        </div>

        <!-- Right column -->
        <div class="p-0 pb-0">
            
                <h2>Pomeranian</h2>
                <p>Pequeños, esponjosos y llenos de personalidad el pomeranian es una raza que roba miradas y corazones. su tamaño mini, su pelaje abundante y su carácter alegre lo convierten en un compañero único, ideal para quienes buscan un perrito con presencia y energía.</p>

                <h2>¿Por qué elegir un pomeranian?  </h2>
                <ul>
                    <li><p>Tamaño ideal para espacios pequeños  </p></li>
                    <li><p>Inteligentes, alertas y muy expresivos  </p></li>
                    <li><p>Gran personalidad en un cuerpo pequeño  </p></li>
                    <li><p>Excelente compañero de vida  </p></li>
                </ul>

                <h2>Cuidados básicos</h2>
                <ul>
                    <li><p>Cepillado constante para mantener su volumen y estética  </p></li>
                    <li><p>Alimentación premium  </p></li>
                    <li><p>Estimulación mental y juego diario  </p></li>
                    <li><p>Higiene y revisiones veterinarias regulares  </p></li>
                </ul>

                <br>
                <h2>En Romcy Pets</h2>
                <p>Nos enfocamos en ofrecer pomeranian de alta calidad, cuidando su estructura, salud y temperamento.  </p> 
                <p>Cada uno es criado en un entorno seguro, amoroso y completamente supervisado.</p>

                <br>
                <h2>¿Cómo saber si un pomeranian es de calidad?  </h2>
                <p>No todo es que sea “bonito”… hay detalles que marcan la diferencia</p>   

                <h2>Antes de elegir, fíjate en esto:</h2>

                <p class="font-bold">Estructura  </p>
                <p>Debe ser compacto, proporcionado y bien formado.</p>

                <p class="font-bold">Pelaje </p>
                <p>Abundante, esponjoso y con buena textura.</p>

                <p class="font-bold">Ojitos y expresión  </p>
                <p>Brillantes, vivos y con esa expresión alerta característica.</p>

                <p class="font-bold">Carácter  </p>
                <p>Activo, curioso y seguro (ni temeroso ni agresivo).</p>  

                <p class="font-bold">Salud  </p>
                <p>Fundamental. un cachorro sano siempre será la mejor elección.</p>

                <p>En romcy pets no nos enfocamos solo en lo estético…  </p>
                <p>Nos importa que cada cachorro tenga salud, equilibrio y calidad real</p>

        </div>

    </section>

    
<section class="container grid grid-cols-1 md:grid-cols-2 gap-8 p-0 my-6 -centrado">
        
        <!-- Left column -->
        <div class="pt-5">
            <img src='{{ asset('images/yorkie.webp') }}' class="w-full">
        </div>

        <!-- Right column -->
        <div class="p-0 pb-0">
            
            <h2>yorkshire terrier (yorkie)</h2>
            <p>Elegancia, carácter y lealtad en tamaño mini </p>
            <p>El yorkie es una raza sofisticada, valiente y profundamente leal. a pesar de su tamaño pequeño, tiene una personalidad firme y un gran apego a su familia.</p>

            <br>
            <h2>¿Por qué elegir un yorkie?</h2>
            <ul>
                <li><p>Muy apegados a su dueño  </p></li>
                 <li><p>Ideales para compañía cercana  </p></li>
                 <li><p>Inteligentes y adaptables  </p></li>
                 <li><p>Tamaño práctico para cualquier estilo de vida  </p></li>
                 <li><p>Cuidados básicos  </p></li>
                 <li><p>Mantenimiento de su pelaje (largo o corto)  </p></li>
                 <li><p>Alimentación balanceada  </p></li>
                 <li><p>Estimulación y convivencia constante  </p></li>
                <li><p>cuidado dental importante  </p></li>
            </ul>

            <br>
            <h2>En romcy pets </h2>
            <p>Seleccionamos cuidadosamente cada línea para ofrecer yorkies sanos, hermosos y con excelente carácter. </p>
            <p>Nuestro enfoque es siempre el bienestar, la calidad y el equilibrio de cada cachorro.  </p>
            
            <br>
            <h2>Nuestro compromiso  </h2>
            <p>en romcy pets no solo entregamos cachorros…  entregamos compañeros de vida. </p>
             <p>Trabajamos con amor, ética y responsabilidad, respetando cada proceso y priorizando siempre el bienestar animal.</p>


        </div>

    </section>

    
 
 
    
@endsection



