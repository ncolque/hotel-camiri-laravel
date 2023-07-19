<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Visitas:</b>
        @if (isset($pagina->visitas))
            {{ $pagina->visitas }}
        @else
            0
        @endif
    </div>
    <strong>Copyright &copy; 2021-2022 <a href="#">Hotel Gran Capital - CAMIRI</a>.</strong> All rights reserved.
</footer>
