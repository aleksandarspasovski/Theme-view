<?php

/**
 * @var NY_Page $preview_page
 * @var NY_Page $pb_page
 */


?>

<!-- jQuery Scripts  -->

<script !src="">

    var BASE_URL_SHOP = "<?= __url('shop'); ?>";

    var BASE_URL = "<?= base_url(); ?>";

    var HTTP_REFERER = "<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/'; ?>";

    var csrf = '<?= $this->security->get_csrf_token_name(); ?>';

    var token = '<?= $this->security->get_csrf_hash(); ?>';


    var l_are_you_sure = '<?= cclang('are_you_sure'); ?>';

    var l_yes = '<?= cclang('yes'); ?>';

    var l_no = '<?= cclang('no'); ?>';

    var price_type = '<?= get_user_price_type() ?>';

    var f_message = '<?= $this->session->flashdata('f_message'); ?>';

    var f_type = '<?= $this->session->flashdata('f_type'); ?>';

</script>


<script src="<?= theme_asset(); ?>js/vendor/bootstrap/bootstrap.min.js"></script>

<script src="<?= BASE_ASSET; ?>chosen/chosen.jquery.js"></script>

<script src="<?= BASE_ASSET; ?>sweet-alert-v2/sweetalert2.min.js"></script>

<?php if (true || isset($_GET['enable_gdpr'])): ?>

    <script src="<?= BASE_ASSET; ?>ct-ultimate-gdpr/js/ct-ultimate-gdpr.js?v=0.4<?= APP_VERSION ?>"></script>

    <script src="<?= BASE_ASSET; ?>ct-ultimate-gdpr/js/init_<?= strtoupper(get_current_abbr()) ?>.js?v=0.7<?= APP_VERSION ?>"></script>

    <?php else: ?>

        <link href="<?= BASE_ASSET; ?>cookieconsent/cookieconsent.min.css?v=<?= APP_VERSION ?>" rel="stylesheet">

        <script src="<?= BASE_ASSET; ?>cookieconsent/cookieconsent.min.js?v=<?= APP_VERSION ?>"></script>

        <script src="<?= BASE_ASSET; ?>cookieconsent/init_hr.js?v=<?= APP_VERSION ?>"></script>

    <?php endif; ?>

    <script src="<?= theme_asset(); ?>js/vendor/swiper/swiper.min.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/slick/slick.min.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/parallax/parallax.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/magnificpopup/dist/jquery.magnific-popup.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/countdown/jquery.countdown.min.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/nouislider/nouislider.min.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/ez-plus/jquery.ez-plus.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/tocca/tocca.min.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/scrollLock/jquery-scrollLock.min.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/darktooltip/dist/jquery.darktooltip.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <script src="<?= theme_asset(); ?>js/vendor/instafeed/instafeed.min.js"></script>

    <script src="<?= theme_asset(); ?>js/megamenu.min.js"></script>

    <script src="<?= theme_asset(); ?>js/app.js?v=<?= APP_VERSION ?>"></script>

    <script src="<?= theme_asset(); ?>js/ecommerce.js?v=<?= APP_VERSION ?>"></script>

    <script src="<?= theme_asset(); ?>js/mailchimp.js?v=<?= APP_VERSION ?>"></script>


    <?php

    if (isset($scripts['css_bottom'])) {

        foreach (array_unique($scripts['css_bottom']) as $cs) {

            if (is_array($cs)) {

                echo $cs['text'] . "\n";

            } else {

                if (!(strpos($cs, 'admin-lte') !== false)) {

                    echo '<link href="' . $cs . '" rel="stylesheet">' . "\n";

                }

            }

        }

    }


    if (isset($scripts['js_bottom'])) {

        foreach ($scripts['js_bottom'] as $cs) {

            if (is_array($cs)) {

                echo $cs['text'] . "\n";

            } else {

                if (!(strpos($cs, 'admin-lte') !== false)) {

                    echo '<script src="' . $cs . '"></script>' . "\n";

                }

            }

        }

    }

    ?>



    <?php if (isset($preview_page)) {
        echo $preview_page->Scripts()->getFooter();
    } ?>

    <?php if (isset($pb_page)) {
        echo $pb_page->Scripts()->getFooter();
    } ?>


    <style>

        .swal2-container {

            z-index: 100000000;

        }

        .swal2-container #form_login .row button[type=submit] {

            display: none;

        }

        .swal2-popup {

            font-size: unset;

        }

        .swal2-container .btn-success {

            color: #fff;

            background-color: #5cb85c;

            border-color: #4cae4c;

        }

        .swal2-container .btn-info {

            color: #fff;

            background-color: #5bc0de;

            border-color: #46b8da;

        }

        .swal2-container .btn {

            margin: 0 8px;

        }

        img.swal2-image {

            object-fit: contain;

        }


        button.arr-l.btn i.icon:only-child {
            font-size: 1.4em !important;
            vertical-align: sub;
            margin-right: 0.4em;
        }

        button.arr-r.btn i.icon:only-child {
            font-size: 1.4em !important;
            vertical-align: sub;
            margin-left: 0.4em;
        }

        .swal2-footer a {


            font-weight: 600;

            text-decoration: none;

            cursor: pointer;

        }

        #ct-ultimate-gdpr-cookie-open {
            padding-bottom: 0;
            left: unset !important;
            right: 10px
        }

        .skin-dark-theme #ct-ultimate-gdpr-cookie-accept {
            background-color: #f82e56 !important;
        }

        .swal2-footer {
            flex-wrap: wrap;
        }

        .swal2-footer .break {
            flex-basis: 100%;
            height: 0;
        }

    </style>

    <?php

    $login = get_instance()->session->userdata('loggedin');

    $login = empty($login) ? 0 : $login

    ?>


    <script !src="">

        const logo = '/cc-content/themes/tovedo/asset/images/logo2.png';

        const is_logged_in = <?=$login?>;

        const text_info_vpc = 'Kako bi vam prikazali veleprodajne cijene sa rabatima potrebno se registrirati kao veleprodajni korisnik.';

        const text_info_vpc_return = 'Dobrodošli natrag! Prijavite se kako bi mogli neometano nastaviti kupovinu sa veleprodajnim cijenama <br><br>';

        function setCookie(cname, cvalue, exdays) {

            var d = new Date();

            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));

            var expires = "expires=" + d.toUTCString();

            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

        }

        function getCookie(cname) {

            var name = cname + "=";

            var ca = document.cookie.split(';');

            for (var i = 0; i < ca.length; i++) {

                var c = ca[i];

                while (c.charAt(0) == ' ') {

                    c = c.substring(1);

                }

                if (c.indexOf(name) == 0) {

                    return c.substring(name.length, c.length);

                }

            }

            return "";

        }

        function popup_first_visit() {


            const swalWithBootstrapButtons = Swal.mixin({

                customClass: {

                    popup: 'welcome-popup',

                    confirmButton: 'btn btn-success arr-r',

                    cancelButton: 'btn btn-info arr-l'

                },

                buttonsStyling: false

            })


            swalWithBootstrapButtons.fire({

                allowEscapeKey: false,

                allowOutsideClick: false,

                title: 'Dobrodošli',

                imageUrl: logo,

                imageWidth: 300,

                imageHeight: 200,

                imageAlt: 'Tovedo',

                showCancelButton: true,

                confirmButtonText: 'Tvrtke <i class="icon icon-right-arrow-circular"></i>',

                cancelButtonText: '<i class="icon icon-left-arrow-circular"></i> Maloprodaja ',

                reverseButtons: true,

                footer: '<a href="/korisnik/prijava"> Prijava?</a> / <a href="/korisnik/registracija"> Otvori novi račun?</a><div class="break"></div><a href="<?=site_url(__url('administrator/register_existing'))?>"> Aktiviraj korisnika (samo za stare korisnike)</a>'

            }).then(function (result) {

                if (result.value) {

                //popup_vpc_step2();

                setCookie("price_type", 'vpc', 25);

                setCookie("disable_tmp", 'mpc', 25); //0.0415

                vpcUnknownUser();

                swalWithBootstrapButtons.fire({

                    position: 'center',

                    type: 'success',

                    title: 'Uživajte u posjeti',

                    showConfirmButton: false,

                    timer: 4000

                })

            } else if (

                /* Read more about handling dismissals below */

                result.dismiss === Swal.DismissReason.cancel

                ) {


                setCookie("price_type", 'mpc', 365);

                swalWithBootstrapButtons.fire({

                    position: 'center',

                    type: 'success',

                    title: 'Uživajte u posjeti',

                    showConfirmButton: false,

                    timer: 4000

                })

                mpcUnknownUser();

            }

        })

        }

        function vpcUnknownUser() {

            window.location.href = BASE_URL + "web/switch_price_type_to_vpc";

        }

        function mpcUnknownUser() {

            window.location.href = BASE_URL + "web/switch_price_type_to_mpc";

        }

        function popup_vpc_step2() {

        // added

        const swalWithBootstrapButtons = Swal.mixin({

            customClass: {

                popup: 'welcome-popup',

                confirmButton: 'btn btn-success arr-r',

                cancelButton: 'btn btn-info arr-l'

            },

            buttonsStyling: false

        })

        //

        swalWithBootstrapButtons.fire({

            allowEscapeKey: false,

            allowOutsideClick: false,

            title: 'Imate otvoren račun?',

            imageUrl: '/cc-content/themes/tovedo/asset/images/logo2.png',

            imageWidth: 300,

            imageHeight: 200,

            imageAlt: 'Tovedo',

            html: text_info_vpc,

            showCancelButton: true,

            confirmButtonText: 'Registracija <i class="icon icon-right-arrow-circular"></i>',

            cancelButtonText: '<i class="icon icon-left-arrow-circular"></i> Prijava ',

            reverseButtons: true,


        }).then(function (result) {

            if (result.value) {

                window.location.href = BASE_URL + '/korisnik/registracija';

            } else if (

                /* Read more about handling dismissals below */

                result.dismiss === Swal.DismissReason.cancel

                ) {

                swalWithBootstrapButtons.fire({

                    title: 'Prijava',

                    allowEscapeKey: false,

                    allowOutsideClick: false,

                    html: $('#form_login').clone(),

                    cancelButtonText: 'Zatvori',

                    showCancelButton: true,

                    reverseButtons: true,

                    confirmButtonText: 'Prijavi me',

                    footer: '<a href="/korisnik/registracija"> Otvori novi račun?</a><div class="break"></div><a href="<?=site_url(__url('administrator/register_existing'))?>"> Aktiviraj korisnika (samo za stare korisnike)</a>'

                }).then(function (result) {

                    if (result.value) {

                        $('.welcome-popup #form_login').submit()

                    } else if (

                        /* Read more about handling dismissals below */

                        result.dismiss === Swal.DismissReason.cancel

                        ) {

                        setCookie("price_type", 'mpc', 25);

                        setCookie("disable_tmp", 'mpc', 25);

                        swalWithBootstrapButtons.fire({

                            position: 'center',

                            type: 'success',

                            title: 'Uživajte u posjeti',

                            showConfirmButton: false,

                            timer: 1500

                        })

                    }

                })


            }

        })

    }

    function popup_vpc_return() {

        const swalWithBootstrapButtons = Swal.mixin({

            customClass: {

                popup: 'welcome-popup',

                confirmButton: 'btn btn-success arr-r',

                cancelButton: 'btn btn-info arr-l'

            },

            buttonsStyling: false

        })


        swalWithBootstrapButtons.fire({

            title: 'Prijava',

            imageUrl: logo,

            imageWidth: 300,

            imageHeight: 200,

            imageAlt: 'Tovedo',

            allowEscapeKey: false,

            allowOutsideClick: false,

            html: text_info_vpc_return + $($('#form_login').clone()).wrap('<p/>').parent().html(),

            cancelButtonText: 'Zatvori',

            showCancelButton: true,

            reverseButtons: true,

            confirmButtonText: 'Prijavi me',

            footer: '<a href="/korisnik/registracija"> Otvori novi račun?</a><div class="break"></div><a href="<?=site_url(__url('administrator/register_existing'))?>"> Aktiviraj korisnika (samo za stare korisnike)</a>'

        }).then(function (result) {

            if (result.value) {

                $('.welcome-popup #form_login').submit()

            } else if (

                /* Read more about handling dismissals below */

                result.dismiss === Swal.DismissReason.cancel

                ) {

                setCookie("price_type", 'vpc', 25);

                setCookie("disable_tmp", 'mpc', 25);

                vpcUnknownUser()

                swalWithBootstrapButtons.fire({

                    position: 'center',

                    type: 'success',

                    title: 'Uživajte u posjeti',

                    showConfirmButton: false,

                    timer: 1500

                })

            }

        })

    }

    function popupMpcVpc() {

        if (!is_logged_in) {

            var price_type = getCookie("price_type");

            var disable_tmp = getCookie("disable_tmp");

            if (disable_tmp == 'mpc') {
                return '';
            }

            if (price_type == "") {

                popup_first_visit();

            } else if (price_type == 'vpc') {

                popup_vpc_return()

            }

        }

    }

//    popupMpcVpc();


</script>


<script id="endOfLoad">


    /*

    document.addEventListener('end_of_load_footer', function (e) {

        var el = document.getElementById("endOfLoad");



        var js = document.createElement('script');

        js.src = "/asset/ct-ultimate-gdpr/form/js/contact-form.js";

        el.parentNode.insertBefore(js, el);

    }, false);

    */

    function createNewEvent(eventName) {

        var event;

        if (typeof (Event) === 'function') {

            event = new Event(eventName);

        } else {

            event = document.createEvent('Event');

            event.initEvent(eventName, true, true);

        }

        return event;

    }

    document.dispatchEvent(createNewEvent('end_of_load_footer'));

    function echoError() {

        Swal.fire({

            position: 'center',

            type: f_type,

            title: f_message,

            showConfirmButton: false,

            timer: 4000

        })

    }

    <?php if(!empty($this->session->flashdata('f_message'))):?>

        echoError();

    <?php endif;?>

</script>

<script src="<?= BASE_ASSET; ?>js/debuger_helper_js.js?v=2"></script>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .container-popup-layout {
            display: none;
            position: fixed;
            top: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, .4);
            height: 100%;
            width: 100%;
            z-index: 99999;
        }
        #popup-layout {
            display: block;
            width: 780px;
            background-color: #bababa;
            margin: 0 auto;
            padding-bottom: 20px !important;
            height: auto;
            box-shadow: 0 21px 59px rgba(0, 0, 0, .24);
            background-color: #fff;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: fixed;
            padding: 0 3.75rem;
            text-align: center;
            z-index: 999999;
        }
        #popup-layout img {
            max-width: 40%;
            height: 110px;
            margin: -30px auto 0;
            display: block;
            background-color: #fff;
            box-shadow: 2px 2px 3px 0px #838383;
        }
        #popup-layout > h2 {
            margin-top: 20px;
            border-bottom: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
        }
        #popup-layout > h2:after {
            content: "";
            display: block;
            width: 79px;
            height: 5px;
            border-radius: 4px;
            background-color: #468cf1;
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        #popup-layout .options ul {
            list-style: none;
            padding: 0;
        }
        .sign-up {
            display: none;
        }
        .sign-up-form input[type="email"], .sign-up-form input[type="password"] {
            display: block;
            width: 100%;
            height: 41px;
            padding: 6px 12px;
            margin-bottom: 20px;
            font-size: 15px;
            line-height: 1.42857143;
            color: #6f6f6f;
            background-color: #f7f7f7;
            background-image: none;
            border: 1px solid #e8e8e8;
            border-radius: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }
        .sign-up-form form {
            width: 70%;
            margin: 0 auto;
        }
        #popup-layout .footer {
            display: inline-block;
            width: 100%;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em;
            text-align: center;
        }
        #popup-layout .footer a {
            font-weight: 600;
            color: #2977e3;
        }
        .description {
            margin-bottom: 20px;
        }
        .description p{
            width: 90%;
            margin: 0 auto;
            line-height: 25px;
        }
        .description h2{
            margin-top: 100px;
            margin-bottom: 0;
            border-bottom: 0px;
        }
        .description h2:after{
            content: "";
            display: block;
            width: 31%;
            border-bottom: 1px solid #e8e8e8;
            border-radius: 4px;
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        .reg {
            top: 127%;
        }
        .options ul {
            padding: 0;
            list-style: none;
            margin: 1rem auto;
            text-align: center;
            margin-top: 26px;
            font-size: 15px;
        }
        .options li {
            text-align: center;
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }
        .options ul li:not(:last-child):after {
            content: "";
            display: block;
            width: 120px;
            height: 2px;
            border-radius: 4px;
            background-color: #fff;
            background-image: linear-gradient(90deg,#55b0ef 0,#4ca4ec);
            position: absolute;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        .options {
            width: 100%;
            margin-top: 50px;
        }
        .cls-opt{
            margin-top: 0px!important;
        }
        body.color-lightblue .btn:not(:hover):not(.btn-alt):not(.selected_var_first) {
            min-width: 200px;
            color: #fff;
        }
        body.color-lightblue .btn:hover, body.color-lightblue .btn-primary:hover, body.color-lightblue button.action:hover{
            min-width: 200px;
        }
        .swal2-container #form_login .row button[type=submit]{
            display: block!important;
            margin: 0 auto;
        }
        .options .icon{
            font-size: 1.4em !important;
            vertical-align: sub!important;
        }
        button .icon-right-arrow-circular{
            font-size: 1.4em !important;
            vertical-align: sub!important;
            margin-left: 0.4em!important;
        }
        .options .icon-right-arrow-circular{
            margin-left: 0.4em!important;
        }
        .options .icon-left-arrow-circular{
            margin-right: 0.4em!important;
        }
    </style>
</head>
<body>
    <!-- welcome popup -->
    <div class="container-popup-layout">
        <div id="popup-layout" class="popup-l">
            <img src="https://www.tovedo.hr/cc-content/themes/tovedo/asset/images/logo2.png">
            <h2>Dobrodošli</h2>
            <div class="description">
                <p>Na stranicama naše internetske trgovine pronaći ćete širok asortiman proizvoda za Vas i Vaš ured. Za pristup cjelokupnoj ponudi proizvoda i omogućenu kupovinu, molimo Vas da prethodno odaberete kupujete li kao pravna ili kao fizička osoba. Vaš odabir u bilo kojem trenutku možete promijeniti klikom na ikonicu u gornjem lijevom uglu ekrana.</p>
            </div>
            <div class="options">
                <div class="col-sm-6">
                    <span class="btn custom-btn"><i class="icon icon-left-arrow-circular"></i>Maloprodaja</span>
                    <ul>
                        <li>cijene za fizičke osobe koje kupuju preko weba</li>
                        <li>omogućeno gotovinsko plaćanje pouzećem</li>
                        <li>beskamatno plaćanje karticama do maksimalno 36 rata</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <span class="btn custom-btn">Tvrtke<i class="icon icon-right-arrow-circular"></i></span>
                    <ul>
                        <li>cijene za pravne osobe koje kupuju preko weba</li>
                        <li>registrirajte se kako biste vidjeli svoje cijene</li>
                        <li>poseban popust na kompletan asortiman proizvoda</li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <a href="/korisnik/prijava"> Prijava?</a> / <a href="/korisnik/registracija"> Otvori novi račun?</a>
                <div class="break"></div>
                <a href="https://www.tovedo.kujex.com/aktivacija-korisnika"> Aktiviraj korisnika (samo za stare korisnike)</a>
            </div>
        </div>
    </div>
    
    <!-- sign-up popup -->
    <div class="container-popup-layout sign-up">
        <div id="popup-layout" class="popup-l">
            <img src="https://www.tovedo.hr/cc-content/themes/tovedo/asset/images/logo2.png">
            <h2 class="title-underline text-center">Prijava</h2>
            <div class="description">
                <p>Dobrodošli natrag! Prijavite se kako bi mogli neometano nastaviti kupovinu sa veleprodajnim cijenama</p>
            </div>
            <div class="sign-up-form"></div>
            <div class="options cls-opt">
                <div class="col-sm-6">
<!--                    <span class="btn custom-btn2">Zatvori</span>-->
                </div>
                <div class="col-sm-6">
<!--                    <span class="btn custom-btn2 ">Prijavi me</span>-->
                </div>
            </div>
            <div class="footer">
                <a href="/korisnik/registracija"> Otvori novi račun?</a>
                <div class="break"></div>
                <a href="https://www.tovedo.kujex.com/aktivacija-korisnika"> Aktiviraj korisnika (samo za stare korisnike)</a>
            </div>
        </div>
    </div>


<script>

    function popup1() {
        var html_popup = document.querySelectorAll('.popup-l')[0].outerHTML;
        
        Swal.fire({

            position: 'center',

            showConfirmButton: false,
            
            allowOutsideClick: false,

            html: html_popup     

        })
        
        var custom_btns = document.querySelectorAll('.custom-btn');

        for (let i = 0; i < custom_btns.length; i++) {
            custom_btns[i].addEventListener('click', (e) => {
                e.preventDefault();
                if(i === 2){
                   results = false;

               }else if(i === 3){
                   results = true;
               }
               var result = results;

               if (result == true) {

                setCookie("price_type", 'vpc', 25);

                setCookie("disable_tmp", 'mpc', 25);

                vpcUnknownUser();

                Swal.fire({

                    position: 'center',

                    type: 'success',

                    title: 'Uživajte u posjeti',

                    showConfirmButton: false,

                    timer: 4000

                })

            } else if (result == false) {

                setCookie("price_type", 'mpc', 365);

                Swal.fire({

                    position: 'center',

                    type: 'success',

                    title: 'Uživajte u posjeti',

                    showConfirmButton: false,

                    timer: 4000

                })
                   mpcUnknownUser();
            }

        });
        }
    }

    
    function popup2() {
        var html_popup2_form = document.querySelector('#form_login').outerHTML;
        document.querySelector('.sign-up-form').innerHTML = html_popup2_form;
        
        var html_popup2 = document.querySelectorAll('.popup-l')[1].outerHTML;

        Swal.fire({

            position: 'center',

            showConfirmButton: false,

            allowOutsideClick: false,

            html: html_popup2

        })

        document.querySelector('#swal2-content #popup-layout form').id = 'new_login_form';

        var txt = document.querySelector('#swal2-content #popup-layout form .row .btn').innerHTML += '<i class="icon icon-right-arrow-circular"></i>';

        var close_btn = document.querySelector('#swal2-content #popup-layout form .row .col-xs-12:last-child').innerHTML += '<button type="button" class="swal2-cancel btn btn-info arr-l" aria-label="" style="display: inline-block; float:left;margin:0;"><i class="icon icon-left-arrow-circular">Zatvori</button>';

console.log(txt)

        // '<i class="icon icon-right-arrow-circular"></i>';
    }
    

function popupMpcVpcNew() {

    if (!is_logged_in) {

        var price_type = getCookie("price_type");

        var disable_tmp = getCookie("disable_tmp");

        if (disable_tmp == 'mpc') {
            return '';
        }
        if (price_type == "") {
            popup1();
        } else if (price_type == 'vpc') {
            popup2()
        }
    }
}
popupMpcVpcNew()
</script>

</body>
</html>




