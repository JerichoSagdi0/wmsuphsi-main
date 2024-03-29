let navbar = document.querySelector('.header .navbar')

document.querySelector('#menu-btn').onclick = () =>{
  navbar.classList.add('active');
}

document.querySelector('#close-navbar').onclick = () =>{
  navbar.classList.remove('active');
};


var swiper = new Swiper(".home-slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: true,
  },
  effect: "slide", 
  loop:true,
  grabCursor:false
  ,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  }
});

var swiper = new Swiper(".home-courses-slider", {
  loop:true,
  grabCursor:true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
});

var swiper = new Swiper(".administration-slider", {
  loop:true,
  grabCursor:true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  }
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  grabCursor:true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
});

var swiper = new Swiper(".logo-slider", {
  loop:true,
  grabCursor:true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    10: {
      slidesPerView: 2,
    },
  },
});

let accordion = document.querySelectorAll('.faq .accordion-container .accordion');

accordion.forEach(acco =>{
  acco.onclick = () =>{
    accordion.forEach(dion => dion.classList.remove('active'));
    acco.classList.toggle('active');
  };
});

document.querySelector('.load-more .btn').onclick = () =>{
  document.querySelectorAll('.courses .box-container .hide').forEach(show =>{
    show.style.display = 'block';
  });
  document.querySelector('.load-more .btn').style.display = 'none';
};




// INSERT JS HERE


// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});



var my_handlers = {

  fill_provinces:  function(){

      var region_code = $(this).val();
      $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
      
  },

  fill_cities: function(){

      var province_code = $(this).val();
      $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
  },


  fill_barangays: function(){

      var city_code = $(this).val();
      $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
  }
};

$(function(){
  $('#region').on('change', my_handlers.fill_provinces);
  $('#province').on('change', my_handlers.fill_cities);
  $('#city').on('change', my_handlers.fill_barangays);

  $('#region').ph_locations({'location_type': 'regions'});
  $('#province').ph_locations({'location_type': 'provinces'});
  $('#city').ph_locations({'location_type': 'cities'});
  $('#barangay').ph_locations({'location_type': 'barangays'});

  $('#region').ph_locations('fetch_list');
});


$(document).ready(function () {
  $('#example').DataTable();
});