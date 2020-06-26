// $('.slide').owlCarousel({
//     smartSpeed:2000,
//     dots: true,
//     margin: 20,
//     responsiveClass:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:2
//         },
//         1000:{
//             items:2
//         }
//     }
// });

$('.slide').owlCarousel({
    smartSpeed:2000,
    dots: true,
    margin: 20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
});

$('.container-fluid').owlCarousel({
    smartSpeed:2000,
    dots: false,
    nav: true,
    margin: 20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
});

$('.container-fluid-parceiros').owlCarousel({
    smartSpeed:2000,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    loop: true,
    margin: 20,
    responsiveClass:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
});


  
  

function adiconarClasse(){
    const icone = document.querySelectorAll('i');

    icone.forEach(el =>{
        el.classList.add('fa-2x')
    })
}
adiconarClasse()


function menuMobile(){
    const menu = document.querySelector('.menu-main');
    const button = document.querySelector('.menu-mobile');
    const close = document.querySelector('.close-button');

    button.addEventListener('click', () =>{
        menu.classList.add('ativo');
        close.classList.add('ativo')
    });

    close.addEventListener('click', () =>{
        menu.classList.remove('ativo');
        close.classList.remove('ativo');
    })
}
menuMobile()