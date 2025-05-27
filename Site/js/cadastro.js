// para que o cadastro funcione em duas etapas 

document.addEventListener('DOMContentLoaded', () => {
    const nextStepButton = document.getElementById('nextstep');
    const backButton = document.getElementById('back_button');
    const tutorStep = document.getElementById('tutor-step');
    const petStep = document.getElementById('pet-step');
  
    // Função para avançar para o próximo passo
    nextStepButton.addEventListener('click', () => {
      tutorStep.classList.remove('active');  // Oculta a etapa do tutor
      petStep.classList.add('active');       // Exibe a etapa do pet
  
      // Atualiza a barra de progresso
      document.querySelector('.progress-bar li:nth-child(2)').classList.add('active');
    });
  
    // Função para voltar para o passo anterior
    backButton.addEventListener('click', () => {
      petStep.classList.remove('active');   // Oculta a etapa do pet
      tutorStep.classList.add('active');    // Exibe a etapa do tutor
  
      // Atualiza a barra de progresso de forma regressiva
      document.querySelector('.progress-bar li:nth-child(2)').classList.remove('active');
    });
  
    // Inicializa o controle segmentado (alternar entre as opções de botão)
    setupSegmentedControl();
  });
  
  // Função para configurar esse controle segmentado
  function setupSegmentedControl() {
    const SEGMENTED_CONTROL_BASE_SELECTOR = ".ios-segmented-control";
    const SEGMENTED_CONTROL_INDIVIDUAL_SEGMENT_SELECTOR = ".ios-segmented-control .option input";
    const SEGMENTED_CONTROL_BACKGROUND_PILL_SELECTOR = ".ios-segmented-control .selection";
  
    // Para cada elemento com a classe '.ios-segmented-control', adiciona um ouvinte de evento 'change' (algo que quando clica, "ouve" o click e faz botão mudar)
    forEachElement(SEGMENTED_CONTROL_BASE_SELECTOR, elem => {
      elem.addEventListener("change", updatePillPosition); // Atualiza a posição da seleção
    });
  
    // Adiciona ouvinte para o evento de redimensionamento
    window.addEventListener("resize", updatePillPosition); // Evita que a barra de seleção se mexa e desconfigure quando redimensionar a janela
  }
  
  // Função para atualizar a posição da barra de seleção e as classes dos itens
  function updatePillPosition() {
    const SEGMENTED_CONTROL_INDIVIDUAL_SEGMENT_SELECTOR = ".ios-segmented-control .option input";
    const SEGMENTED_CONTROL_BACKGROUND_PILL_SELECTOR = ".ios-segmented-control .selection";
  
    // Para cada input dentro do controle segmentado, ele verifica se está sendo selecionado
    forEachElement(SEGMENTED_CONTROL_INDIVIDUAL_SEGMENT_SELECTOR, (elem, index) => {
      const option = elem.parentNode; 
  
      if (elem.checked) {
        // Move o fundo para a opção selecionada
        moveBackgroundPillToElement(elem, index);
        // Marca o item como selecionado
        option.classList.add('selected');
      } else {
        // Remove caso o item não esteja selecionado
        option.classList.remove('selected');
      }
    });
  }
  
  // Função que move a barra de seleção para a posição correta
  function moveBackgroundPillToElement(elem, index) {
    document.querySelector(".ios-segmented-control .selection").style.transform = "translateX(" + (elem.offsetWidth * index) + "px)";
  }
  
  // Função auxiliar para iterar (repetir) sobre esses elementos
  function forEachElement(className, fn) {
    Array.from(document.querySelectorAll(className)).forEach(fn);
  }
  