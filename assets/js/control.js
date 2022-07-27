$(document).ready( () => {
    const all = $(document),
          user__acct = $('.user__acct'),
          dropdown = $('.user__acct .dropdown'),
          link = $('.footer__inner a.sign__out');
    user__acct.on('click', e => {
        e.stopPropagation();
        dropdown.toggleClass('active');
        all.on('click', () => {
            dropdown.removeClass('active');
        })
    })

    link.on('click', (e) => {
        e.preventDefault();
        // add a sweetalert notifcation and a log out redirect
    })


    function trigger(){
        const trigger__btn = $('.product__header .trigger__button button'),
              navigation = $('.product__header .navigation'),
              all = $(document);
        trigger__btn.on('click', (e) => {
            e.stopPropagation();
            navigation.toggleClass('toggle');
        });
        all.on('click', () => {
            navigation.removeClass('toggle')
        }) 
    }
    trigger()
})



