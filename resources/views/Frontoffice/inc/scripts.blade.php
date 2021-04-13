<script src={{asset('Frontoffice/js/libs/jquery.js')}}></script>  
<script src={{asset('Frontoffice/js/libs/jquery-ui.1.10.4.min.js')}}></script>                
<!--Totop-->
<script type="text/javascript" src={{asset('Frontoffice/js/totop/jquery.ui.totop.js')}} ></script>   
<!--Slide Revolution-->
<script type="text/javascript" src={{asset('Frontoffice/js/rs-plugin/js/jquery.themepunch.tools.min.js')}} ></script>      
<script type='text/javascript' src={{asset('Frontoffice/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}></script>    
<!-- Maps -->
<script src={{asset('Frontoffice/js/maps/gmap3.js')}}></script>            
<!--Ligbox--> 
<script type="text/javascript" src={{asset('Frontoffice/js/fancybox/jquery.fancybox.js')}}></script> 
<!-- owl.carousel.min.js-->
<script src={{asset('Frontoffice/js/carousel/owl.carousel.min.js')}}></script>
<!-- Filter -->
<script src={{asset('Frontoffice/js/filters/jquery.isotope.js')}} type="text/javascript"></script>
<!-- Parallax-->
<script type="text/javascript" src={{asset('Frontoffice/js/parallax/parallax.min.js')}}></script>  
<!--Theme Options-->
<script type="text/javascript" src={{asset('Frontoffice/js/theme-options/theme-options.js')}}></script>
<script type="text/javascript" src={{asset('Frontoffice/js/theme-options/jquery.cookies.js')}}></script> 
<!-- Bootstrap.js-->
<script type="text/javascript" src={{asset('Frontoffice/js/bootstrap/bootstrap.js')}}></script> 
<script type="text/javascript" src={{asset('Frontoffice/js/bootstrap/bootstrap-slider.js')}}></script> 
<!--MAIN FUNCTIONS-->
<script type="text/javascript" src={{asset('Frontoffice/js/main.js')}}></script>
<!-- ======================= End JQuery libs =========================== -->

<!--Slider Function-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution({
            dottedOverlay:"none",
            delay:5000,
            startwidth:1170,
            startheight:490,
            minHeight:350,
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview"
        });             
    }); //ready
</script>