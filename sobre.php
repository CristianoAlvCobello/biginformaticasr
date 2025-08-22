<?php   
    $titulo = "Sobre"; 
    $arquivo = basename(__FILE__);
    include 'includes/header.php'; 
?>

<!--Status da empresa-->
<div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
  <img src="./images/background-status-empresa.png" class="absolute inset-0 -z-10 size-full object-cover object-right opacity-35 md:object-center" />
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-5xl font-semibold sm:text-7xl">Sobre a <strong class="text-red-600">Big Informática</strong></h2>
      <p class="mt-8 text-lg font-medium text-pretty sm:text-xl/8">A Big Informática surgiu com o propósito de transformar o varejo e o setor empresarial por meio da tecnologia e, desde então, temos conquistado resultados que nos enchem de orgulho.</p>
    </div>
    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-gray-800">Anos de atuação</dt>
          <dd class="text-4xl font-semibold">20</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-gray-800">Sistemas de gestão rodando</dt>
          <dd class="text-4xl font-semibold">29.320</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-gray-800">Clientes satisfeitos</dt>
          <dd class="text-4xl font-semibold">30.000+</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-gray-800">Soluções proporcionadas</dt>
          <dd class="text-4xl font-semibold">Ilimitadas</dd>
        </div>
      </dl>
    </div>
  </div>
</div>

<!--Avaliações-->
<div class="py-25 px-10 bg-gray-100 bg-[url('../images/background-avaliacoes.png')] bg-cover bg-center">
  <h3 class="text-3xl font-bold mb-12 text-center">O que nossos clientes dizem:</h3>
  <div class="swiper mySwiper max-w-3xl mx-auto">
    <div class="swiper-wrapper">
      <!--Slide 1-->
      <div class="swiper-slide">
        <div class="bg-white rounded-xl p-8 flex flex-col h-full justify-around min-h-[300px] inset-ring-2">
          <div class="text-red-600 text-5xl leading-none">“</div>
          <p class="italic text-center px-10">
            Sempre fui muito bem atendido, as respostas sempre rápidas, cordiais e soluções eficientes. Pessoal realmente diferenciado, recomendo fortemente.
          </p>
          <div class="text-red-600 text-5xl leading-none text-right">”</div>
          <div>
            <div class="flex items-center justify-center text-yellow-400">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="text-red-600 font-semibold text-center"> - Marcelo Rocha - </p>
          </div>
        </div>
      </div>
      <!--Slide 2-->
      <div class="swiper-slide">
        <div class="bg-white rounded-xl p-8 flex flex-col h-full justify-around min-h-[300px] inset-ring-2">
          <div class="text-red-600 text-5xl leading-none">“</div>
          <p class="italic text-center px-10">
            Atendimento rápido via WhatsApp, serviço bem feito e muito solícitos no pós-venda de primeira. Recomendo a empresa.
          </p>
          <div class="text-red-600 text-5xl leading-none text-right">”</div>
          <div>
            <div class="flex items-center justify-center text-yellow-400">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="text-red-600 font-semibold text-center"> - Lucas Messali - </p>
          </div>
        </div>
      </div>
      <!--Slide 3-->
      <div class="swiper-slide">
        <div class="bg-white rounded-xl p-8 flex flex-col h-full justify-around min-h-[300px] inset-ring-2">
          <div class="text-red-600 text-5xl leading-none">“</div>
          <p class="italic text-center">
            Sou cliente há anos da Big Informática, e o atendimento é sempre top. Respondem prontamente, resolvem os casos pra valer, são muito profissionais. Estão de parabéns pela qualidade do serviço prestado.
          </p>
          <div class="text-red-600 text-5xl leading-none text-right">”</div>
          <div>
            <div class="flex items-center justify-center text-yellow-400">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="text-red-600 font-semibold text-center"> - Liebe Heliomar - </p>
          </div>
        </div>
      </div>
      <!--Slide 4-->
      <div class="swiper-slide">
        <div class="bg-white rounded-xl p-8 flex flex-col h-full justify-around min-h-[300px] inset-ring-2">
          <div class="text-red-600 text-5xl leading-none">“</div>
          <p class="italic text-center">
            Confesso que fiquei contente com esse sistema afim de solicitar informações sobre a qualidade dos serviços prestados por essa competente e consertada empresa. No momento eu entre a nota de 01 a 10, dou a nota máxima 10.
          </p>
          <div class="text-red-600 text-5xl leading-none text-right">”</div>
          <div>
            <div class="flex items-center justify-center text-yellow-400">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="text-red-600 font-semibold text-center"> - Adauto Faria - </p>
          </div>
        </div>
      </div>
      <!--Slide 5-->
      <div class="swiper-slide">
        <div class="bg-white rounded-xl p-8 flex flex-col h-full justify-around min-h-[300px] inset-ring-2">
          <div class="text-red-600 text-5xl leading-none">“</div>
          <p class="italic text-center">Fui muito bem indicado por um amigo para consertar meu notebook.
            E pense em uma indicação fantástica.
            <br>1 - Atendimento rápido.
            <br>2 - Orçamento justo e preciso.
            <br>3 - Meu notebook ficou excelente e consertaram rapidinho.
            <br>Recomendo!
          </p>
          <div class="text-red-600 text-5xl leading-none text-right">”</div>
          <div>
            <div class="flex items-center justify-center text-yellow-400">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="text-red-600 font-semibold text-center"> - Fabio Oliveira - </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script de carrosel -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.mySwiper', {
    loop: true,
    autoplay: {
      delay: 8000,
      disableOnInteraction: false,
    },
    speed: 800,
    spaceBetween: 30,
    grabCursor: true,
  });
</script>


<?php 
    include 'includes/footer.php' 
?>