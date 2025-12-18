<?php   
    $titulo = "Historico de atualizações"; 
    $arquivo = basename(__FILE__);
    include 'includes/header.php';
?>

<div class="flex flex-col bg-gray-100">
  <!-- Conteúdo -->
  <div class="w-full max-w-6xl mx-auto flex flex-wrap md:flex-nowrap gap-6 px-4 md:px-8 py-6 items-start">
    <!-- NAV LATERAL -->
    <aside class="w-full md:w-64 self-start lg:sticky top-36">
      <div class="md:sticky md:top-6">
        <nav class="bg-red-600 text-white shadow-lg rounded-xl">
          <!-- Cabeçalho -->
          <div class="p-6 border-b-[2.5px] border-black">
            <h1 class="text-center text-xl sm:text-2xl font-bold tracking-wide">Histórico de Atualizações</h1>
          </div>
          <!-- Links -->
          <ul class="flex flex-col p-4 space-y-3">
            <li>
              <button onclick="mudarConteudo('15-09-25')"
                id="15-09-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                15/09/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('08-09-25')"
                id="08-09-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                08/09/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('27-08-25')"
                id="27-08-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                27/08/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('25-08-25')"
                id="25-08-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                25/08/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('19-08-25')"
                id="19-08-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                19/08/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('13-08-25')"
                id="13-08-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                13/08/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('05-08-25')"
                id="05-08-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                05/08/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('23-07-25')"
                id="23-07-25"
                class="w-full px-4 py-2 font-bold  rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                23/07/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('21-07-25')"
                id="21-07-25"
                class="w-full px-4 py-2 font-bold  rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                21/07/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('16-07-25')"
                id="16-07-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                16/07/25
              </button>
            </li>
            <li>
              <button onclick="mudarConteudo('01-07-25')"
                id="01-07-25"
                class="w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-700 transition-all duration-200 ease-in-out cursor-pointer">
                01/07/25
              </button>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- CONTEÚDO PRINCIPAL -->
    <main id="conteudo" class="flex-1 flex justify-center items-start opacity-100 transition-opacity duration-300 ease-in-out">
    <!--JS-->
    </main>
  </div>
</div>

<script>
  function mudarConteudo(pagina) {
    var conteudo = document.getElementById('conteudo')

    // Seleciona todos os botões da lista
    var botoes = document.querySelectorAll('ul button')

    // Reseta todos os botões
    botoes.forEach(btn => {
      btn.classList.remove('bg-red-700')
      btn.classList.add('bg-red-600')
    })

    // Destaca apenas o clicado
    var botaoSelecionado = document.getElementById(pagina)
    botaoSelecionado.classList.remove('bg-red-600')
    botaoSelecionado.classList.add('bg-red-700')

    // Animação do conteúdo
    conteudo.classList.remove("opacity-100")
    conteudo.classList.add("opacity-0")

    setTimeout(() => {
      fetch('./atualizacoes/' + pagina + '.html')
        .then(res => res.text())
        .then(html => {
          conteudo.innerHTML = html 
          conteudo.classList.remove("opacity-0")
          conteudo.classList.add("opacity-100")
        })
      window.scrollTo({ top: 0 })
    }, 300)
  }
  mudarConteudo('15-09-25')
</script>

<?php 
    include 'includes/footer.php' 
?>