    let next = document.querySelector('.slider-animated-widget .next');
    let prev = document.querySelector('.slider-animated-widget .prev');

    next.addEventListener('click', function () {
      let items = document.querySelectorAll('.item');
      document.querySelector('.slide').appendChild(items[0]);
    })

    prev.addEventListener('click', function () {
      let items = document.querySelectorAll('.item');
      document.querySelector('.slide').prepend(items[items.length - 1]);
    })  