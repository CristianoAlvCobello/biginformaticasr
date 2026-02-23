<?php   
    $titulo = "Início"; 
    $arquivo = basename(__FILE__);
    $descricao = "Big Informática em São Roque/SP: soluções completas em tecnologia da informação, assistência técnica para computadores, sistemas de gestão, backup profissional e suporte técnico especializado.";
    include 'includes/header.php';
?>

<section class="relative overflow-hidden text-white bg-[url('../images/fachada.jpeg')] bg-cover bg-center">
  <!-- Overlay vermelho semi-transparente -->
  <div class="absolute inset-0 bg-red-900 opacity-80"></div>
  <div class="relative z-10 min-w-full flex">
    <div class="container mx-auto px-4 py-20 md:py-53 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-10 md:mb-0 flex flex-col items-center text-center md:text-left" data-aos="fade-right">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
          Onde tudo tem <span class="text-yellow-400">Solução <i class="bi bi-lightbulb"></i></span>
        </h1>
        <p class="text-2xl mb-6">
          Excelência em tecnologia, atendimento e suporte para o seu negócio.
        </p>
      </div>
      <div class="md:w-1/2 flex justify-center" data-aos="fade-left">
        <img src="images/pc-box.webp" class="max-w-lg w-full">
      </div>
    </div>
  </div>
</section>

<!-- Serviços Oferecidos -->
<article class="py-20 bg-gray-100 overflow-x-hidden overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto lg:text-center mb-12">
          <h2 class="text-4xl font-bold text-red-700 mb-4" data-aos="flip-right">Nossos Big Serviços</h2>
          <p class="text-2xl" data-aos="flip-left">Trazendo o melhor para você em:</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Assistência Técnica -->
            <div data-aos="fade-right">
              <div class="bg-white p-8 rounded shadow-lg flex flex-col items-center transition duration-300 hover:shadow-2xl hover:-translate-y-2">
                  <i class="bi bi-tools text-5xl text-red-700 mb-4"></i>
                  <h3 class="text-2xl font-semibold mb-2">Big Assistência Técnica</h3>
                  <p class="mb-5">Manutenção preventiva e corretiva em computadores, notebooks e impressoras. Diagnóstico rápido, troca de peças, limpeza interna, formatação e instalações. <a class="text-sky-600 hover:text-sky-800" href="#assistenciaTecnica">Ver mais</a></p>
                  <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-bold">Atendimento especializado</span>
              </div>
            </div>
            <!-- Sistemas de Gestão -->
            <div data-aos="fade-down">
              <div class="bg-white p-8 rounded shadow-lg flex flex-col items-center transition duration-300 hover:shadow-2xl hover:-translate-y-2">
                  <i class="bi bi-bar-chart-line-fill text-5xl text-red-700 mb-4"></i>
                  <h3 class="text-2xl font-semibold mb-2">Big Sistemas de Gestão</h3>
                  <p class="mb-5">Implantação, treinamento e suporte para sistemas de gestão empresarial (ERP), controle de estoque, vendas, financeiro e emissão de notas fiscais eletrônicas. <a class="text-sky-600 hover:text-sky-800" href="#sistemasDeGestao">Ver mais</a></p>
                  <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-bold">Soluções personalizadas</span>
              </div>
            </div>
            <!-- Backup -->
             <div data-aos="fade-left">
                <div class="bg-white p-8 rounded shadow-lg flex flex-col items-center transition duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <i class="bi bi-cloud-arrow-up-fill text-5xl text-red-700 mb-4"></i>
                    <h3 class="text-2xl font-semibold mb-2">Big Backup</h3>
                    <p class="mb-5">Proteja seus dados com soluções de backup local e em nuvem. Recuperação rápida em caso de falhas, criptografia e monitoramento contínuo. 
                    <a class="text-sky-600 hover:text-sky-800" href="#backup">Ver mais</a></p>
                    <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-bold">Segurança garantida</span>
                </div>
              </div>
        </div>
    </div>
</article>

<!--Sistemas de gestão-->
<section class="bg-gray-100 py-10 scroll-mt-25" id="sistemasDeGestao"> 
  <div class="mx-auto max-w-7xl px-4 lg:px-8">
    <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-4xl font-bold mb-4 text-red-700" data-aos="flip-right">Agilidade e Segurança</h2>
        <p class="text-2xl" data-aos="flip-left">Para Gestão do Seu Negócio</p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-18 lg:max-w-7xl">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
        <!-- Oficinas Mecânicas -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/oficina-mecanica.png" alt="Oficinas Mecânicas" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Oficinas Mecânicas
          </dt>
          <dd class="mt-2 text-gray-700">Gestão de estoque, financeiro e ordens de serviço.</dd>
        </div>
        <!-- Mercado e Açougue -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/acougue.png" alt="Mercado e Açougue" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Mercado e Açougue
          </dt>
          <dd class="mt-2 text-gray-700">Controle de vendas, estoque e emissão de notas.</dd>
        </div>
        <!-- Petshop -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/petshop.png" alt="Petshop" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Petshop
          </dt>
          <dd class="mt-2 text-gray-700">Produtos, serviços e agendamento de banho e tosa.</dd>
        </div>
        <!-- Comércio em Geral -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/comercio.png" alt="Comércio em Geral" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Pequenas e Médias Empresas
          </dt>
          <dd class="mt-2 text-gray-700">Estoque, vendas, financeiro e relatórios.</dd>
        </div>
        <!-- Prestadores de Serviços -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/prestacao-de-servico.png" alt="Prestadores de Serviços" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Prestadores de Serviços
          </dt>
          <dd class="mt-2 text-gray-700">Contratos, ordens de serviço e financeiro.</dd>
        </div>
        <!-- Transportadoras -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/transporte.png" alt="Transportadoras" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Transportadoras
          </dt>
          <dd class="mt-2 text-gray-700">Fretes, rotas e controle de veículos.</dd>
        </div>
        <!-- Farmácias -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/farmacia.png" alt="Farmácias" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Farmácias
          </dt>
          <dd class="mt-2 text-gray-700">Estoque, vendas e controle de receitas.</dd>
        </div>
        <!-- Lojas de Roupas e Calçados -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/roupas.png" alt="Lojas de Roupas e Calçados" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Lojas de Roupas e Calçados
          </dt>
          <dd class="mt-2 text-gray-700">Gestão de estoque, vendas e cadastro de clientes.</dd>
        </div>
        <!-- Bares, Restaurantes e Similares -->
        <div class="relative pl-20" data-aos="fade-up">
          <dt class="text-lg font-semibold flex items-center">
            <img src="images/restaurante.png" alt="Bares, Restaurantes e Similares" class="absolute left-0 top-0 rounded-lg shadow-md w-16 h-16 object-contain bg-sky-500">
            Bares, Restaurantes e Similares
          </dt>
          <dd class="mt-2 text-gray-700">Comandas, mesas, delivery e vendas rápidas.</dd>
        </div>
  </div>
</section>

<!-- Serviços de Assistência Técnica -->
<section class="bg-gray-100 py-20 scroll-mt-20" id="assistenciaTecnica">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto lg:text-center mb-12">
      <h2 class="text-4xl font-bold text-red-700 mb-4" data-aos="flip-right">Assistência Técnica Especializada</h2>
      <p class="text-2xl" data-aos="flip-left">Confira os principais equipamentos e soluções que atendemos:</p>
    </div>
    <div class="overflow-x-hidden">
      <table class="w-full max-w-lg md:max-w-5xl mx-auto bg-white rounded-lg shadow-2xl text-sm md:text-base">
        <thead>
          <tr data-aos="fade-down">
            <th class="py-3 px-2 text-left text-red-700 font-semibold whitespace-nowrap">Equipamentos</th>
            <th class="py-3 px-2 text-left font-semibold whitespace-nowrap">Serviços Oferecidos</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t" data-aos="fade-left">
            <td class="py-3 px-2 flex items-center">
              <i class="bi bi-pc-display-horizontal text-xl md:text-2xl text-red-700 mr-2"></i>
              <span>Computadores</span>
            </td>
            <td class="py-3 px-2">Manutenção, upgrades, limpeza, formatação e instalação de softwares.</td>
          </tr>
          <tr class="border-t" data-aos="fade-left">
            <td class="py-3 px-2 flex items-center">
              <i class="bi bi-laptop text-xl md:text-2xl text-red-700 mr-2"></i>
              <span>Notebooks</span>
            </td>
            <td class="py-3 px-2">Troca de tela, teclado, bateria, reparos eletrônicos e otimização de desempenho.</td>
          </tr>
          <tr class="border-t" data-aos="fade-left">
            <td class="py-3 px-2 flex items-center">
              <i class="bi bi-display text-xl md:text-2xl text-red-700 mr-2"></i>
              <span>Monitores</span>
            </td>
            <td class="py-3 px-2">Diagnóstico, reparo de imagem, troca de componentes e testes.</td>
          </tr>
          <tr class="border-t" data-aos="fade-left">
            <td class="py-3 px-2 flex items-center">
              <i class="bi bi-battery-charging text-xl md:text-2xl text-red-700 mr-2"></i>
              <span>Nobreaks</span>
            </td>
            <td class="py-3 px-2">Troca de baterias, manutenção preventiva e corretiva, testes de autonomia.</td>
          </tr>
          <tr class="border-t" data-aos="fade-left">
            <td class="py-3 px-2 flex items-center">
              <i class="bi bi-printer text-xl md:text-2xl text-red-700 mr-2"></i>
              <span>Impressoras</span>
            </td>
            <td class="py-3 px-2">Limpeza, troca de peças, configuração de rede e suporte a diversos modelos.</td>
          </tr>
          <tr class="border-t" data-aos="fade-left">
            <td class="py-3 px-2 flex items-center">
              <i class="bi bi-diagram-3 text-xl md:text-2xl text-red-700 mr-2"></i>
              <span>Rede Estruturada</span>
            </td>
            <td class="py-3 px-2">Montagem, manutenção, cabeamento, switches, roteadores e Wi-Fi.</td>
          </tr>
          <tr class="border-t" data-aos="fade-left">
            <td class="py-3 px-2 flex items-center">
              <i class="bi bi-hdd-network text-xl md:text-2xl text-red-700 mr-2"></i>
              <span>Servidores Linux/Windows</span>
            </td>
            <td class="py-3 px-2">Instalação, configuração, backup, virtualização e monitoramento.</td>
          </tr>
          <tr class="border-t" data-aos="fade-left">
            <td class="py-3 px-2 flex items-center">
              <i class="bi bi-bricks text-xl md:text-2xl text-red-700 mr-2"></i>
              <span>Firewall</span>
            </td>
            <td class="py-3 px-2">Proteção de rede, configuração de regras, segurança e monitoramento.</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="text-center mt-12" data-aos="zoom-in-down">
      <a href="https://wa.me/5511974233287?text=Olá,%20gostaria%20de%20solicitar%20um%20orçamento." 
        class="inline-block bg-red-600 text-white px-6 py-3 rounded-full font-bold shadow hover:bg-red-700 transition hover:scale-105 duration-300" 
        target="_blank">
        Solicite um orçamento
      </a>
    </div>
  </div>
</section>

<!--Backup-->
<section class="bg-gray-100 py-20 px-6 scroll-mt-20 overflow-x-hidden" id="backup">
  <div class="max-w-4xl mx-auto space-y-12"> 
    <div class="max-w-4xl mx-auto mb-12">
      <h2 class="text-4xl font-bold text-red-700 mb-4" data-aos="flip-right">Backup Profissional, do Jeito Certo</h2>
      <p class="text-2xl" data-aos="flip-left">Solução completa, contínua e pensada para garantir integridade, agilidade e tranquilidade.</p>
    </div>

    <!-- Timeline -->
    <div class="relative border-l-4 border-red-600/20 ml-4 space-y-10">
      
      <!-- Item 1 -->
      <div class="pl-6 relative">
        <div class="absolute -left-2 top-1 w-3 h-3 bg-red-700 rounded-full" data-aos="fade-down"></div>
        <h3 class="text-lg font-semibold text-red-700" data-aos="fade-left">Backup em Tempo Real</h3>
        <p class="mt-2 text-md" data-aos="fade-left">
          Armazene dados continuamente com criptografia AES 256. Cada alteração é registrada sem pausas ou falhas.
        </p>
      </div>

      <!-- Item 2 -->
      <div class="pl-6 relative">
        <div class="absolute -left-2 top-1 w-3 h-3 bg-red-700 rounded-full" data-aos="fade-down"></div>
        <h3 class="text-lg font-semibold text-red-700" data-aos="fade-left">Retenção Inteligente</h3>
        <p class="mt-2 text-md" data-aos="fade-left">
          Defina o período de retenção ideal, com versionamento automático e recuperação simples a qualquer momento.
        </p>
      </div>

      <!-- Item 3 -->
      <div class="pl-6 relative">
        <div class="absolute -left-2 top-1 w-3 h-3 bg-red-700 rounded-full" data-aos="fade-down"></div>
        <h3 class="text-lg font-semibold text-red-700" data-aos="fade-left">Monitoramento 24/7</h3>
        <p class="mt-2 text-md" data-aos="fade-left">
          Acompanhamento contínuo com alertas inteligentes e relatórios automatizados. Mais controle, menos preocupação.
        </p>
      </div>

      <!-- Item 4 -->
      <div class="pl-6 relative">
        <div class="absolute -left-2 top-1 w-3 h-3 bg-red-700 rounded-full" data-aos="fade-down"></div>
        <h3 class="text-lg font-semibold text-red-700" data-aos="fade-left">Recuperação Pós-Falha</h3>
        <p class="mt-2 text-md" data-aos="fade-left">
          Restaure arquivos ou sistemas inteiros com rapidez após falhas, exclusões acidentais ou ataques cibernéticos.
        </p>
      </div>

      <!-- Item 5 -->
      <div class="pl-6 relative">
        <div class="absolute -left-2 top-1 w-3 h-3 bg-red-700 rounded-full" data-aos="fade-down"></div>
        <h3 class="text-lg font-semibold text-red-700" data-aos="fade-left">Conformidade e LGPD</h3>
        <p class="mt-2 text-md" data-aos="fade-left">
          A solução segue rigorosamente as exigências da LGPD, com tratamento ético e seguro de todos os dados armazenados.
        </p>
      </div>
    </div>
  </div>
</section>

<?php 
    include 'includes/footer.php' 
?>