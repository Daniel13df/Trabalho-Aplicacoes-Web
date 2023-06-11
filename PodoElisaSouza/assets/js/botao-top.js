window.addEventListener('scroll', function() {
    var botaoFlutuante = document.getElementById('botao-flutuante');
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > 700) { 
        botaoFlutuante.style.opacity = '1';
        botaoFlutuante.style.display = 'block';
    } else {
        botaoFlutuante.style.opacity = '0'; 
        botaoFlutuante.style.display = 'none';
    }
  });