(function() {

let delay = +'<?=$delay?>';
let newStyle = document.createElement('link');

newStyle.rel = 'stylesheet';
newStyle.type = 'text/css';
newStyle.href = '<?=$cssFile?>';

document.head.appendChild(newStyle);

let puBlock = document.createElement('div');
puBlock.classList.add('puBlock');

let puHead = document.createElement('div');
puHead.classList.add('puBlock-head');
puHead.innerHTML = '<span><?=$popup->text?></span>';

let puBody = document.createElement('div');
puBody.classList.add('puBlock-body');
puBody.innerHTML = '<span>Закрыть</span>';

puBlock.appendChild(puHead);
puBlock.appendChild(puBody);

let shadow = document.createElement('div');
shadow.classList.add('puBlock-shadow');
shadow.appendChild(puBlock);

document.body.appendChild(shadow);

setTimeout(function() {
  shadow.classList.add('puBlock-shadow-show');
  
  localStorage.setItem('puLastShow', +(new Date()));
}, delay);

puBody.addEventListener('click', function() {
  shadow.classList.remove('puBlock-shadow-show');
  shadow.classList.add('puBlock-shadow-hide');
});

})();
