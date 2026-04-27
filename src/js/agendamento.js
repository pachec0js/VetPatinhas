// para que o cadastro funcione em duas etapas 

document.addEventListener('DOMContentLoaded', () => {
    const nextStepButton = document.getElementById('nextstep');
    const backButton = document.getElementById('back_button');
    const tutorStep = document.getElementById('first-step');
    const petStep = document.getElementById('second-step');
  
    // Função para avançar para o próximo passo
    nextStepButton.addEventListener('click', () => {
      tutorStep.classList.remove('active');  // Oculta a etapa do tutor
      petStep.classList.add('active');       // Exibe a etapa do pet
  
    });
  
    // Função para voltar para o passo anterior
    backButton.addEventListener('click', () => {
      petStep.classList.remove('active');   // Oculta a etapa do pet
      tutorStep.classList.add('active');    // Exibe a etapa do tutor
  
    });
  
    // Inicializa o controle segmentado (alternar entre as opções de botão)
    setupSegmentedControl();
  });


  

  // Função para gerar opções de horários
  function gerarHorarios() {
    const select = document.getElementById("horario");
    const horarioInicio = "00:00"; // Início do dia (meia-noite)
    const horarioFim = "23:59";   // Fim do dia (23:59)

    const [horaInicio, minInicio] = horarioInicio.split(":").map(Number);
    const [horaFim, minFim] = horarioFim.split(":").map(Number);

    let horaAtual = horaInicio;
    let minutoAtual = minInicio;

    // Loop para criar incrementos de 30 minutos
    while (horaAtual < horaFim || (horaAtual === horaFim && minutoAtual < minFim)) {
        const horaFormatada = String(horaAtual).padStart(2, "0");
        const minutoFormatado = String(minutoAtual).padStart(2, "0");
        const opcao = `${horaFormatada}:${minutoFormatado}`;

        // Adiciona a opção ao select
        const option = document.createElement("option");
        option.value = opcao;
        option.textContent = opcao;
        select.appendChild(option);

        // Incrementa os minutos
        minutoAtual += 30;
        if (minutoAtual >= 60) {
            minutoAtual = 0;
            horaAtual += 1;
        }
    }
}

// Gera os horários ao carregar a página
document.addEventListener("DOMContentLoaded", gerarHorarios);
