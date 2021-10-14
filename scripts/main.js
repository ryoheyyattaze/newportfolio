'use strict'; {
  //テキストアニメーション
  function TextAnimation(el) {
    el = document.querySelector(el);
    const str = el.innerHTML;
    const strArry = str.trim().split('');
    const result = strArry.reduce((acc, crr) => {
      crr = crr.replace(/\s+/, '&nbsp;');
      return `${acc}<span class="target char">${crr}</span>`;
    }, '') 
    el.innerHTML = result;
  }
  TextAnimation('.main_visual__inner');
  TextAnimation('#about__white')
  TextAnimation('#about__black')
  TextAnimation('#works__white')
  TextAnimation('#works__black')
  TextAnimation('#contact__white')
  TextAnimation('#contact__black')
  TextAnimation('.loading__inner');
  
  //スクロールオブザーバー
  const targets = document.querySelectorAll('.target');
  const cb = function(entries, observer) {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add('inview');
        observer.unobserve(entry.target);
      } else {
        entry.target.classList.remove('inview');
      }
    });
  }
  const options = {
    root: null,
    rootMargin: "0px 0px -100px 0px",
  }
  const io = new IntersectionObserver(cb, options);
  targets.forEach(target => {
    io.observe(target);
  });


  //ハンバーガーメニュー
  const btn = document.querySelector('.header__btn');
  const menu = document.querySelector('.mobile_menu');
  const cover = document.querySelector('.mobile_menu__cover');
  const ul = document.querySelector('.mobile_menu__ul');
  const lists = document.querySelectorAll('.mobile_menu__li');
  function menuOpen() {
    const spans = document.querySelectorAll('.span');
    spans.forEach(span => {
      span.classList.toggle('inview');
    });
    menu.classList.toggle('inview');
    ul.classList.toggle('inview');
    lists.forEach(list => {
      list.classList.toggle('inview');
    });
    cover.classList.toggle('inview');
  }
  btn.addEventListener('click', () => {
    menuOpen();
  });
  cover.addEventListener('click', () => {
    menuOpen();
  });
  lists.forEach(list => {
    list.addEventListener('click', () => {
      menuOpen();
    });
  });


  //ローディング画面
  window.onload = function() {
    setTimeout(() => {
      const loading = document.querySelector('.loading');
      loading.classList.add('loaded');
      const chars = document.querySelectorAll('.char');
      chars.forEach(char => {
        char.classList.add('show');
      });
    }, 2000);
  }
  }

