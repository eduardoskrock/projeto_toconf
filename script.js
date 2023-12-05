/*Função para atualizar a seleção do input 'radio', mudando de 'não' para 'sim'
(condicional) ou vice-versa, com base no argumento 'selecionado'.*/
    if (selecionado.id === 'on') {
      document.getElementById('off').checked = false;
    } else if (selecionado.id === 'off') {
      document.getElementById('on').checked = false;
    }
  

  //codigo Jquery para apresentar o conteudo na etapa de "escolher filial"
  $(document).ready(function() {
    //Quando o usuário muda a seleção
    $('input[name="exampleRadios"]').on('change', function() {
        // Se a opção "SIM" estiver selecionada, mostra a tela
        if ($('#exampleRadios2').is(':checked')) {
            $('.section-forms.filial').show();
        } else {
            // Se a opção "NÃO" estiver selecionada, oculta a tela por padrão
            $('.section-forms.filial').hide();
        }
    });
});