<?php   
    $titulo = "Historico de atualizações"; 
    $arquivo = basename(__FILE__);
    include 'includes/header.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <button onclick="toggleMenu()" class="fixed top-24 left-4 z-50 bg-red-600 text-white p-3 rounded-full shadow-2xl hover:bg-red-700 transition-all border-2 border-white lg:hidden">
    <i class="bi bi-list text-2xl"></i>
  </button>   

  <div class="w-full max-w-7xl mx-auto px-6 py-6 lg:pl-72 flex gap-10 items-start">

    <div id="overlay" onclick="toggleMenu()" class="fixed inset-0 bg-black/50 z-40 hidden transition-opacity"></div>
  
    <aside id="menu-lateral" class="fixed top-0 left-0 h-screen w-72 bg-red-600 text-white shadow-2xl border-r-2 border-black transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-50 overflow-y-auto">
      <div class="md:sticky md:top-6">
        <nav class="bg-red-600 text-white shadow-lg rounded-xl overflow-hidden border-2 border-black">

          <ul id="lista-principal" class="flex flex-col max-h-[75vh] overflow-y-auto bg-black/10">
            
            <li class="border-b border-black/20">
              <button onclick="toggleAccordion('ano-2025', this)" class="w-full px-4 py-3 flex justify-between items-center font-black bg-red-700 hover:bg-red-800 transition-all">
                2025
                <i class="bi bi-chevron-down transition-transform duration-300"></i>
              </button>
              
              <ul id="ano-2025" class="hidden bg-black/5">
                
                <li class="border-b border-black/5">
                  <button onclick="toggleAccordion('mes-dez-25', this)" class="w-full px-6 py-2 flex justify-between items-center font-bold text-sm bg-red-600/50 hover:bg-red-600">
                    DEZEMBRO
                    <i class="bi bi-plus-lg text-xs"></i>
                  </button>
                  <ul id="mes-dez-25" class="hidden p-2 space-y-1 bg-white/5">
                    <li><button onclick="mudarConteudo('12-12-25')" id="12-12-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">12/12/25</button></li>
                    <li><button onclick="mudarConteudo('09-12-25')" id="09-12-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">09/12/25</button></li>
                    <li><button onclick="mudarConteudo('08-12-25')" id="08-12-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">08/12/25</button></li>
                    <li><button onclick="mudarConteudo('02-12-25')" id="02-12-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">02/12/25</button></li>
                    <li><button onclick="mudarConteudo('01-12-25')" id="01-12-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">01/12/25</button></li>
                  </ul>
                </li>

                <li class="border-b border-black/5">
                  <button onclick="toggleAccordion('mes-nov-25', this)" class="w-full px-6 py-2 flex justify-between items-center font-bold text-sm bg-red-600/50 hover:bg-red-600">
                    NOVEMBRO
                    <i class="bi bi-plus-lg text-xs"></i>
                  </button>
                  <ul id="mes-nov-25" class="hidden p-2 space-y-1 bg-white/5">
                    <li><button onclick="mudarConteudo('24-11-25')" id="24-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">24/11/25</button></li>
                    <li><button onclick="mudarConteudo('20-11-25')" id="20-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">20/11/25</button></li>
                    <li><button onclick="mudarConteudo('19-11-25')" id="19-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">19/11/25</button></li>
                    <li><button onclick="mudarConteudo('17-11-25')" id="17-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">17/11/25</button></li>
                    <li><button onclick="mudarConteudo('13-11-25')" id="13-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">13/11/25</button></li>
                    <li><button onclick="mudarConteudo('11-11-25')" id="11-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">11/11/25</button></li>
                    <li><button onclick="mudarConteudo('06-11-25')" id="06-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">06/11/25</button></li>
                    <li><button onclick="mudarConteudo('05-11-25')" id="05-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">05/11/25</button></li>
                    <li><button onclick="mudarConteudo('04-11-25')" id="04-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">04/11/25</button></li>
                    <li><button onclick="mudarConteudo('03-11-25')" id="03-11-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">03/11/25</button></li>
                  </ul>
                </li>

                <li class="border-b border-black/5">
                  <button onclick="toggleAccordion('mes-out-25', this)" class="w-full px-6 py-2 flex justify-between items-center font-bold text-sm bg-red-600/50 hover:bg-red-600">
                    OUTUBRO
                    <i class="bi bi-plus-lg text-xs"></i>
                  </button>
                  <ul id="mes-out-25" class="hidden p-2 space-y-1 bg-white/5">
                    <li><button onclick="mudarConteudo('28-10-25')" id="28-10-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">28/10/25</button></li>
                    <li><button onclick="mudarConteudo('20-10-25')" id="20-10-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">20/10/25</button></li>
                    <li><button onclick="mudarConteudo('15-10-25')" id="15-10-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">15/10/25</button></li>
                    <li><button onclick="mudarConteudo('14-10-25')" id="14-10-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">14/10/25</button></li>
                  </ul>
                </li>

                <li class="border-b border-black/5">
                  <button onclick="toggleAccordion('mes-set-25', this)" class="w-full px-6 py-2 flex justify-between items-center font-bold text-sm bg-red-600/50 hover:bg-red-600">
                    SETEMBRO
                    <i class="bi bi-plus-lg text-xs"></i>
                  </button>
                  <ul id="mes-set-25" class="hidden p-2 space-y-1 bg-white/5">
                    <li><button onclick="mudarConteudo('30-09-25')" id="30-09-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">30/09/25</button></li>
                    <li><button onclick="mudarConteudo('16-09-25')" id="16-09-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">16/09/25</button></li>
                    <li><button onclick="mudarConteudo('15-09-25')" id="15-09-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">15/09/25</button></li>
                    <li><button onclick="mudarConteudo('08-09-25')" id="08-09-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">08/09/25</button></li>
                  </ul>
                </li>

                <li class="border-b border-black/5">
                  <button onclick="toggleAccordion('mes-ago-25', this)" class="w-full px-6 py-2 flex justify-between items-center font-bold text-sm bg-red-600/50 hover:bg-red-600">
                    AGOSTO
                    <i class="bi bi-plus-lg text-xs"></i>
                  </button>
                  <ul id="mes-ago-25" class="hidden p-2 space-y-1 bg-white/5">
                    <li><button onclick="mudarConteudo('27-08-25')" id="27-08-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">27/08/25</button></li>
                    <li><button onclick="mudarConteudo('25-08-25')" id="25-08-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">25/08/25</button></li>
                    <li><button onclick="mudarConteudo('19-08-25')" id="19-08-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">19/08/25</button></li>
                    <li><button onclick="mudarConteudo('13-08-25')" id="13-08-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">13/08/25</button></li>
                    <li><button onclick="mudarConteudo('05-08-25')" id="05-08-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">05/08/25</button></li>
                  </ul>
                </li>

                <li class="border-b border-black/5">
                  <button onclick="toggleAccordion('mes-jul-25', this)" class="w-full px-6 py-2 flex justify-between items-center font-bold text-sm bg-red-600/50 hover:bg-red-600">
                    JULHO
                    <i class="bi bi-plus-lg text-xs"></i>
                  </button>
                  <ul id="mes-jul-25" class="hidden p-2 space-y-1 bg-white/5">
                    <li><button onclick="mudarConteudo('23-07-25')" id="23-07-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">23/07/25</button></li>
                    <li><button onclick="mudarConteudo('21-07-25')" id="21-07-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">21/07/25</button></li>
                    <li><button onclick="mudarConteudo('16-07-25')" id="16-07-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">16/07/25</button></li>
                    <li><button onclick="mudarConteudo('01-07-25')" id="01-07-25" class="btn-data w-full px-4 py-1.5 text-sm rounded bg-red-600 hover:bg-red-700 text-left">01/07/25</button></li>
                  </ul>
                </li>

              </ul>
            </li>
            
            </ul>
        </nav>
      </div>
    </aside>

    <main id="conteudo" class="flex-1 flex justify-center items-start opacity-100 transition-opacity duration-300 ease-in-out">
        </main>
  
</div>

<script>

  function mudarConteudo(pagina) {
    const conteudo = document.getElementById('conteudo');
    const botoes = document.querySelectorAll('.btn-data');

    
    botoes.forEach(btn => {
      btn.classList.remove('bg-red-800', 'ring-1', 'ring-white');
      btn.classList.add('bg-red-600');
    });

    
    const ativo = document.getElementById(pagina);
    if (ativo) {
      ativo.classList.remove('bg-red-600');
      ativo.classList.add('bg-red-800', 'ring-1', 'ring-white');
    }

    
    if (window.innerWidth < 1024) {
      document.getElementById('lista-principal').classList.add('hidden');
      document.getElementById('menu-icon-main').style.transform = "rotate(0deg)";
    }

    
    conteudo.classList.replace("opacity-100", "opacity-0");
    setTimeout(() => {
      fetch('./atualizacoes/' + pagina + '.html')
        .then(res => res.text())
        .then(html => {
          conteudo.innerHTML = html;
          conteudo.classList.replace("opacity-0", "opacity-100");
        })
        .catch(() => {
          conteudo.innerHTML = "<p class='p-10 font-bold text-red-600'>Erro ao carregar arquivo.</p>";
          conteudo.classList.replace("opacity-0", "opacity-100");
        });
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }, 300);
  }

  
function toggleMenu() {
  const menu = document.getElementById('menu-lateral');
  const overlay = document.getElementById('overlay');
  
  
  menu.classList.toggle('-translate-x-full');
  
  
  overlay.classList.toggle('hidden');
}
  
function togglePrincipal() {
  const menu = document.getElementById('menu-historico');
  menu.classList.toggle('-translate-x-full');
}


  function toggleAccordion(id, btn) {
    const subLista = document.getElementById(id);
    const icon = btn.querySelector('i');
    
 
    subLista.classList.toggle('hidden');
    
  
    if (icon.classList.contains('bi-chevron-down')) {
    
      icon.style.transform = subLista.classList.contains('hidden') ? "rotate(0deg)" : "rotate(180deg)";
    } else {
     
      icon.classList.toggle('bi-plus-lg');
      icon.classList.toggle('bi-dash-lg');
    }
  }


  window.onload = () => mudarConteudo('12-12-25');
</script>

<?php include 'includes/footer.php' ?>