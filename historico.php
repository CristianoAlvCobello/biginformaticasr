<?php   
    $titulo = "Historico de atualizações"; 
    $arquivo = basename(__FILE__);
    include 'includes/header.php';
?>

<div class="flex flex-col bg-gray-100">
  <!-- Conteúdo -->
  <div class="w-full mx-auto max-w-6xl flex flex-wrap md:flex-nowrap gap-6 px-4 md:px-8 py-6 items-start">
    <!-- NAV LATERAL -->
    <aside class="w-full md:w-64 self-start lg:sticky top-36">
      <div class="md:sticky md:top-6">
        <nav class="bg-red-700 text-white shadow-lg rounded-xl">
          <!-- Links organizados por ano > mês > dia -->
          <ul class="flex flex-col p-4 space-y-4">
            <!-- Ano 2026 -->
            <li>
              <button type="button"
                onclick="toggleAno('ano-2026')"
                data-ano="ano-2026"
                class="btn-ano w-full px-4 py-2 font-bold rounded-lg bg-red-700 hover:bg-red-600 hover:scale-[1.02] active:scale-95 transition-all duration-200 ease-in-out cursor-pointer flex items-center justify-between">
                <span>2026</span>
                <span id="icon-ano-2026">+</span>
              </button>
              <ul id="ano-2026" class="mt-2 space-y-2 ano-lista overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out">
                <button type="button"
                  onclick="toggleMes('mes-janeiro-26')"
                  data-mes="mes-janeiro-26"
                  class="btn-mes w-full px-4 py-1 rounded-lg bg-red-600 transition-all duration-200 ease-in-out cursor-pointer flex items-center">
                  <span>Janeiro</span>
                </button>
                <ul id="mes-janeiro-26" class="mt-2 space-y-2 mes-lista overflow-hidden max-h-96 opacity-100 transition-all duration-300 ease-out">
                  <li>
                    <button onclick="mudarConteudo('2026/13-01-26')"
                      id="13-01-26" 
                      class="btn-data w-full px-4 py-1 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                      13/01/2025  
                    </button>
                  </li>
                </ul>
              </ul>
            </li>

            <!-- Ano 2025 -->
            <li>
              <button type="button"
                onclick="toggleAno('ano-2025')"
                data-ano="ano-2025"
                class="btn-ano w-full px-4 py-2 font-bold rounded-lg bg-red-600 hover:bg-red-600 hover:scale-[1.02] active:scale-95 transition-all duration-200 ease-in-out cursor-pointer flex items-center justify-between">
                <span>2025</span>
                <span id="icon-ano-2025">+</span>
              </button>

              <ul id="ano-2025" class="mt-2 ano-lista overflow-hidden max-h-[32rem] opacity-100 transition-all duration-300 ease-out">
                <!-- Dezembro -->
                <li>
                  <button type="button"
                    onclick="toggleMes('mes-dezembro')"
                    data-mes="mes-dezembro"
                    class="btn-mes w-full px-4 py-1 rounded-lg bg-red-700 hover:bg-red-600 transition-all duration-200 ease-in-out cursor-pointer flex items-center">
                    <span>Dezembro</span>
                  </button>
                  <ul id="mes-dezembro" class="mt-2 space-y-2 mes-lista overflow-hidden max-h-0 opacity-100 transition-all duration-300 ease-out">
                  <li>
                      <button onclick="mudarConteudo('23-12-25')"
                        id="23-12-25"
                        class="btn-data w-full px-4 py-1 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        23/12/2025  
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('12-12-25')"
                        id="12-12-25"
                        class="btn-data w-full px-4 py-1 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        12/12/2025  
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('09-12-25')"
                        id="09-12-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        09/12/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('08-12-25')"
                        id="08-12-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        08/12/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('02-12-25')"
                        id="02-12-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        02/12/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('01-12-25')"
                        id="01-12-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        01/12/2025
                      </button>
                    </li>
                  </ul>
                </li>

                <!-- Novembro -->
                <li class="border-t border-white/40">
                  <button type="button"
                    onclick="toggleMes('mes-novembro')"
                    data-mes="mes-novembro"
                    class="mt-2 btn-mes w-full px-4 py-1 rounded-lg bg-red-700 hover:bg-red-600 transition-all duration-200 ease-in-out cursor-pointer flex items-center">
                    <span>Novembro</span>
                  </button>
                  <ul id="mes-novembro" class="mt-2 space-y-2 mes-lista overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out">
                    <li>
                      <button onclick="mudarConteudo('24-11-25')"
                        id="24-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        24/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('20-11-25')"
                        id="20-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        20/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('19-11-25')"
                        id="19-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        19/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('17-11-25')"
                        id="17-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        17/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('13-11-25')"
                        id="13-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        13/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('11-11-25')"
                        id="11-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        11/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('06-11-25')"
                        id="06-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        06/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('05-11-25')"
                        id="05-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        05/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('04-11-25')"
                        id="04-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        04/11/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('03-11-25')"
                        id="03-11-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        03/11/2025          
                      </button>
                    </li>
                  </ul>
                </li>

                <!-- Outubro -->
                <li class="border-t border-white/40">
                  <button type="button"
                    onclick="toggleMes('mes-outubro')"
                    data-mes="mes-outubro"
                    class="mt-2 btn-mes w-full px-4 py-1 rounded-lg bg-red-700 hover:bg-red-600 transition-all duration-200 ease-in-out cursor-pointer flex items-center">
                    <span>Outubro</span>
                  </button>
                  <ul id="mes-outubro" class="mt-2 space-y-2 mes-lista overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out">
                    <li>
                      <button onclick="mudarConteudo('28-10-25')"
                        id="28-10-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        28/10/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('20-10-25')"
                        id="20-10-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        20/10/2025    
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('15-10-25')"
                        id="15-10-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        15/10/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('14-10-25')"
                        id="14-10-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        14/10/2025
                      </button>
                    </li>
                  </ul>
                </li>

                <!-- Setembro -->
                <li class="border-t border-white/40">
                  <button type="button"
                    onclick="toggleMes('mes-setembro')"
                    data-mes="mes-setembro"
                    class="mt-2 btn-mes w-full px-4 py-1 rounded-lg bg-red-700 hover:bg-red-600 transition-all duration-200 ease-in-out cursor-pointer flex items-center">
                    <span>Setembro</span>
                  </button>
                  <ul id="mes-setembro" class="mt-2 space-y-2 mes-lista overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out">
                    <li>
                      <button onclick="mudarConteudo('30-09-25')"
                        id="30-09-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        30/09/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('16-09-25')"
                        id="16-09-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        16/09/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('15-09-25')"
                        id="15-09-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        15/09/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('08-09-25')"
                        id="08-09-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer text-center">
                        08/09/2025
                      </button>
                    </li>
                  </ul>
                </li>

                <!-- Agosto -->
                <li class="border-t border-white/40">
                  <button type="button"
                    onclick="toggleMes('mes-agosto')"
                    data-mes="mes-agosto"
                    class="mt-2 btn-mes w-full px-4 py-1 rounded-lg bg-red-700 hover:bg-red-600 transition-all duration-200 ease-in-out cursor-pointer flex items-center">
                    <span>Agosto</span>
                  </button>
                  <ul id="mes-agosto" class="mt-2 space-y-2 mes-lista overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out">
                    <li>
                      <button onclick="mudarConteudo('27-08-25')"
                        id="27-08-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        27/08/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('25-08-25')"
                        id="25-08-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        25/08/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('19-08-25')"
                        id="19-08-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        19/08/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('13-08-25')"
                        id="13-08-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        13/08/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('05-08-25')"
                        id="05-08-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        05/08/2025
                      </button>
                    </li>
                  </ul>
                </li>

                <!-- Julho -->
                <li class="border-t border-white/40">
                  <button type="button"
                    onclick="toggleMes('mes-julho')"
                    data-mes="mes-julho"
                    class="mt-2 btn-mes w-full px-4 py-1 rounded-lg bg-red-700 hover:bg-red-600 transition-all duration-200 ease-in-out cursor-pointer flex items-center">
                    <span>Julho</span>
                  </button>
                  <ul id="mes-julho" class="mt-2 space-y-2 mes-lista overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-out">
                    <li>
                      <button onclick="mudarConteudo('23-07-25')"
                        id="23-07-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        23/07/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('21-07-25')"
                        id="21-07-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        21/07/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('16-07-25')"
                        id="16-07-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        16/07/2025
                      </button>
                    </li>
                    <li>
                      <button onclick="mudarConteudo('01-07-25')"
                        id="01-07-25"
                        class="btn-data w-full px-4 py-2 rounded-lg transition-all duration-200 ease-in-out cursor-pointer">
                        01/07/2025
                      </button>
                    </li>
                  </ul>
                </li>
              </ul>
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

    // Seleciona todos os botões de dia
    var botoes = document.querySelectorAll('.btn-data')

    // Reseta todos os botões de dia
    botoes.forEach(btn => {
      btn.classList.remove('font-bold')
      btn.classList.add('font-base')
    })

    // Destaca apenas o dia clicado
    var nomeTratado = pagina.substring(pagina.lastIndexOf("/") + 1) // Limpa qualquer coisa antes da barra
    var botaoSelecionado = document.getElementById(nomeTratado)
    botaoSelecionado.classList.remove('font-base')
    botaoSelecionado.classList.add('font-bold')

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

  function toggleMes(id) {
    var listaClicada = document.getElementById(id)
    var listasMes = document.querySelectorAll('.mes-lista')
    var botoesMes = document.querySelectorAll('.btn-mes')

    if (!listaClicada) return

    // Verifica se o mês clicado já estava aberto (baseado em max-height/opacidade)
    var estavaAberto = listaClicada.classList.contains('max-h-96') && listaClicada.classList.contains('opacity-100')

    // Fecha todos os meses e reseta ícones/cores com animação
    listasMes.forEach(lista => {
      lista.classList.remove('max-h-96', 'opacity-100')
      lista.classList.add('max-h-0', 'opacity-0')
    })

    botoesMes.forEach(btn => {
      btn.classList.remove('bg-red-600')
      btn.classList.add('bg-red-700')
    })

    // Se já estava aberto, apenas fecha tudo (efeito acordeão)
    if (estavaAberto) {
      return
    }

    // Abre apenas o mês clicado e destaca botão/seta com transição suave
    listaClicada.classList.remove('max-h-0', 'opacity-0')
    listaClicada.classList.add('max-h-96', 'opacity-100')

    var botaoMesSelecionado = document.querySelector('button[data-mes="' + id + '"]')
    if (botaoMesSelecionado) {
      botaoMesSelecionado.classList.remove('bg-red-700')
      botaoMesSelecionado.classList.add('bg-red-600')
    }

  }

  function toggleAno(id) {
    var listaClicada = document.getElementById(id)
    var iconClicado = document.getElementById('icon-' + id)
    var listasAno = document.querySelectorAll('.ano-lista')
    var botoesAno = document.querySelectorAll('.btn-ano')

    if (!listaClicada || !iconClicado) return

    var estavaAberto = !listaClicada.classList.contains('max-h-0')

    // Fecha todos os anos
    listasAno.forEach(lista => {
      lista.classList.remove('max-h-[32rem]', 'max-h-40', 'opacity-100')
      lista.classList.add('max-h-0', 'opacity-0')
    })
    botoesAno.forEach(btn => {
      btn.classList.remove('bg-red-600')
      btn.classList.add('bg-red-700')
    })

    // Se já estava aberto, apenas fecha tudo
    if (estavaAberto) return

    // Abre o ano clicado e destaca o botão selecionado
    listaClicada.classList.remove('max-h-0', 'opacity-0')
    // Altura máxima diferente para 2026 (menor) e 2025 (maior)
    if (id === 'ano-2026') {
      listaClicada.classList.add('max-h-40', 'opacity-100')
    } else {
      listaClicada.classList.add('max-h-[32rem]', 'opacity-100')
    }

    var botaoAnoSelecionado = document.querySelector('button[data-ano="' + id + '"]')
    if (botaoAnoSelecionado) {
      botaoAnoSelecionado.classList.remove('bg-red-700')
      botaoAnoSelecionado.classList.add('bg-red-600')
    }
  }

  toggleAno('ano-2026')
  mudarConteudo('2026/13-01-26')
</script>

<?php 
    include 'includes/footer.php' 
?>