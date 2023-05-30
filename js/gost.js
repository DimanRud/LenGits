let btnCli = document.querySelectorAll('.gost__btn');
let blChang = document.querySelectorAll('.gost__item');





btnCli.forEach((element, i) => {
  let itActive = false;
  element.addEventListener('click', function() {
    if (!itActive) {
      element.classList.add('gost__active');
      blChang[i].classList.add('gost__active');
      itActive = true;
    } else {
      element.classList.remove('gost__active');
      blChang[i].classList.remove('gost__active');
      itActive = false;
    }
  });
});
