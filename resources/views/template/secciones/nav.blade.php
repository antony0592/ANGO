<nav class="menu" id="menu">
    <div class="contenedor contenedor-botones-menu">
        <button id="btn-menu-barras" class="btn-menu-barras"><i class=""></i></button>
        <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class=""></i></button>
    </div>

    <div class="contenedor contenedor-enlaces-nav">
        <div class="btn-departamentos" id="btn-departamentos">
            <p>Todos los <span>Departamentos</span></p>
            <i class=""></i>
        </div>

        <div class="enlaces">
            <a href="#">Cuenta</a>
            <a href="#">Promociones</a>
            <a href="#">Mesa de Regalos</a>
            <a href="#">Ayuda</a>
        </div>
    </div>

    <div class="contenedor contenedor-grid">
        <div class="grid" id="grid">
            <div class="categorias">
                <button class="btn-regresar"><i class=""></i> Regresar</button>
                <h3 class="subtitulo">Categorias</h3>
                <a href="#" data-categoria="tecnologia-y-computadoras">Tecnología y Computadoras <i class=""></i></a>
                <a href="#" data-categoria="ropa-y-accesorios">Ropa y Accesorios <i class=""></i></a>
                <a href="#" data-categoria="hogar-y-cocina">Hogar y Cocina <i class=""></i></a>
            </div>

            <div class="contenedor-subcategorias">
                <div class="subcategoria " data-categoria="tecnologia-y-computadoras">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class=""></i>Regresar</button>
                        <h3 class="subtitulo">Tecnología y Computadoras</h3>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="{{ asset('images/category/tecnologia-banner-1.png') }}" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="{{ asset('images/category/tecnologia-galeria-1.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/tecnologia-galeria-2.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/tecnologia-galeria-3.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/tecnologia-galeria-4.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="ropa-y-accesorios">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class=""></i>Regresar</button>
                        <h3 class="subtitulo">Ropa y Accesorios</h3>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="{{ asset('images/category/ropa-banner-1.png') }}" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="{{ asset('images/category/ropa-galeria-1.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/ropa-galeria-2.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/ropa-galeria-3.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/ropa-galeria-4.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="subcategoria" data-categoria="hogar-y-cocina">
                    <div class="enlaces-subcategoria">
                        <button class="btn-regresar"><i class=""></i>Regresar</button>
                        <h3 class="subtitulo">Hogar y Cocina</h3>
                    </div>

                    <div class="banner-subcategoria">
                        <a href="#">
                            <img src="{{ asset('images/category/hogar-banner-1.png') }}" alt="">
                        </a>
                    </div>

                    <div class="galeria-subcategoria">
                        <a href="#">
                            <img src="{{ asset('images/category/hogar-galeria-1.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/hogar-galeria-2.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/hogar-galeria-3.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/category/hogar-galeria-4.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>