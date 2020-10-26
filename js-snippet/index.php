<script type="text/javascript">

    //checking media screen size 

    var media = window.matchMedia( "(max-width: 991px)" );

    if (media.matches) {
        //step buttons

        document.querySelector('#product-step-holder').style.marginLeft = '105px';
        document.querySelector('#product-step-holder').style.textAlign = 'center';
        document.querySelector('#product-step-holder').style.width = 'fit-content';

        //first step

        var nomi_stamme = document.querySelector('#nomi-stamme'); //bottom

        var top_button = document.querySelectorAll('.choice-box-inner h2')[1];
        var next_button = document.querySelectorAll('.choice-box-inner')[1];
        //element that has to be pushed down
        var push_btn = document.querySelector('.tall');

        top_button.addEventListener('click', (e) => {
            push_btn.classList.remove('open');
            if (!next_button.classList.contains('open')) {
                nomi_stamme.style.top = '400px';
            } else{
                nomi_stamme.style.top = '130px';
            }
        });

        nomi_stamme.addEventListener('click', () => {
            top_button.classList.remove('open');
            nomi_stamme.style.top = '130px';
        });

        //second step

        var nomi_belt = document.querySelectorAll('#nomi-belt')[0];
        var nomi_tray = document.querySelectorAll('#nomi-tray')[0];

        var nomi_mini = document.querySelector('#nomi-mini');
        var nomi_cushion = document.querySelector('#nomi-cushion');

        var push_el = document.querySelectorAll('.choice-box.shadow')[2]; //bottom

        nomi_belt.children[1].addEventListener('click', () => {
            if (nomi_belt.classList.contains('open')) {
                push_el.removeAttribute('style');            
            } else{
                push_el.style.top = '365px';
            }
        });
        nomi_tray.children[1].addEventListener('click', () => {
            if (nomi_tray.classList.contains('open')) {
                push_el.removeAttribute('style');            
            } else{
                push_el.style.top = '425px'; 
            }
        });
        nomi_mini.children[1].addEventListener('click', () => {
            if (!nomi_mini.classList.contains('open')) {
                push_el.removeAttribute('style');            
            }
        });
        nomi_cushion.children[1].addEventListener('click', () => {
            if (!nomi_cushion.classList.contains('open')) {
                push_el.removeAttribute('style');            
            }
        });
    }

</script>