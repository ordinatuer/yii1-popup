(function(){
  let puTimeout = 24*3600*1000;
  let lastShow = localStorage.getItem('puLastShow');
  let flag = false;

  if (null !== lastShow) {
    flag = puTimeout < (+(new Date()) - lastShow);
  }

  if ( null === lastShow || flag ) {
    let puJs = document.createElement('script');
    puJs.type = 'text/javascript';
    puJs.src = '<?=$script?>';

    document.body.appendChild(puJs);

    localStorage.setItem('puLastShow', +(new Date()));
  }
})();
