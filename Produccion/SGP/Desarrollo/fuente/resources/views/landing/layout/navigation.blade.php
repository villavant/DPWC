<div id="header-nav-position">
    <div id="header-nav-container">
        <div id="color-picker-container">
            <div id="header-nav-bg">
                <div id="header-nav">

                <div id="logo">
                    <h1><a href="{{ route('landing.index') }}">IGP Consulting</a></h1>
                </div><!-- close #logo -->
                <div align=right  style="color:#FFFFFF">Telf: (51+) 979 859 036</div>
                <div id="navigation">
                    <ul class="sf-menu">
                        <li class="{{ Route::is('landing.index') ? 'current' : '' }}">
                            <a href="{{ route('landing.index') }}">Inicio</a>
                        </li>
                        <li class="{{ Route::is('landing.about') ? 'current' : '' }}">
                            <a href="{{ route('landing.about') }}">Nosotros</a>
                        </li>
                        <li class="{{ Route::is('landing.projects') ? 'current' : '' }}">
                            <a href="{{ route('landing.projects') }}">Proyectos</a>
                        </li>
                        <li>
                            <a href="#">Servicios</a>
                            <ul>
                                <li class="{{ Route::is('landing.services.systems') ? 'current' : '' }}">
                                    <a href="{{ route('landing.services.systems') }}">Implementación de Sistemas</a>
                                </li>
                                <li class="{{ Route::is('landing.services.erp') ? 'current' : '' }}">
                                    <a href="{{ route('landing.services.erp') }}">Nuestro ERP</a>
                                </li>
                                <li>
                                    <a href="serv_capa.html">Capacitación</a>
                                </li>
                                <li>
                                    <a href="serv_auditoria.html">Soluciones de software</a>
                                </li>
                                <li>
                                    <a href="serv_venta.html">Venta de equipos</a>
                                </li>
                                <li>
                                    <a href="serv_info.html">Soluciones Informaticas</a>
                                </li>								
                            </ul>
                        </li>
                        <li "{{ Route::is('landing.app') ? 'current' : '' }}">
                            <a href="{{ route('landing.app') }}">App</a>
                        </li>
                        <li>
                            <a href="contact.html">Contactos</a>
                        </li>

                        <li id="facebook-media">
                            <a href="http://facebook.com" class="tool-tip" target="_blank" title="Facebook">Facebook Icon</a>
                        </li>
                        <li id="twitter-media">
                            <a href="http://twitter.com" class="tool-tip" target="_blank" title="Twitter">Twitter Icon</a>
                        </li>
                        <li id="e-mail-media">
                            <a href="" class="tool-tip" target="_blank" title="E-mail">E-mail Icon</a>	
                        </li>
                        <li id="linkedin-media">
                            <a href="http://twitter.com" class="tool-tip" target="_blank" title="Linkedin">Twitter Icon</a>
                        </li>
                        <li id="youtube-media">
                            <a href="" class="tool-tip" target="_blank" title="Youtube">E-mail Icon</a>	
                        </li>
                    </ul>
                </div><!-- close #navigation -->

                <div id="header-nav-base"></div>
                </div><!-- close #header-nav -->
            </div><!-- close #h#header-nav-bg -->
        </div>
    </div><!-- close #header-nav-container -->
</div><!-- close #header-nav-position -->