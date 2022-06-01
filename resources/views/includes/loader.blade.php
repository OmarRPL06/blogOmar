<link rel="stylesheet" type="text/css" href="/css/loader.css">
<script src="/js/jquery-3.6.0.min.js"></script>

<div id="fondo-loader">
    <div class="loader"></div>
</div>

<script type="text/javascript">

    $(document).ready(function() {

        setTimeout(desvanecerLoader, 1000);
        setTimeout(eliminarLoader, 1500);

    });

    function desvanecerLoader() {

        document.getElementById("fondo-loader").classList.add("desaparece");

    };

    function eliminarLoader() {

        $('#fondo-loader').remove();

    }

</script>
