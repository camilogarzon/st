<div class="topheader">
    <ul class="notebutton">
        <li class="note">
            <a href="inicio.php" class="inicionotify">
                <span class="wrap">
                    <span class="thicon inicioicon"></span>
                </span>
            </a>
        </li>
        <li class="note">
            <a href="pages/info.html" class="alertnotify">
                <span class="wrap">
                    <span class="thicon infoicon"></span>
                    <span class="count">5</span>
                </span>
            </a>
        </li>
        <li class="note">
            <a href="pages/message.html" class="messagenotify">
                <span class="wrap">
                    <span class="thicon msgicon"></span>
                    <span class="count">4</span>
                </span>
            </a>
        </li>
        <li class="note">
            <a href="archivos.php" class="archivos">
                <span class="wrap">
                    <span class="thicon archivosicon"></span>
                </span>
            </a>
        </li>
    </ul>
</div><!-- topheader -->

<!-- logo -->
<a href=""><img src="images/logo2.png" alt="Logo" /></a>

<div class="accountinfo">
    <img src="images/foto.png" alt="Avatar" />
    <div class="info">
        <h3>Hola, <span><?php echo $_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellido']; ?></span></h3>
        <div align="right">
            <a href="#">Detalles</a> | <a href="salir.php">Salir</a>
        </div>
    </div><!-- info -->
</div><!-- accountinfo -->