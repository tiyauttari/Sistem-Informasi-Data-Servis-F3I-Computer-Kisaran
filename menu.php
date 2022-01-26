<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background: red;">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only" >Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

             <a class="navbar-brand" href="?page=utama" >Sistem Informasi Data Servis F3I Kisaran</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" >
            <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li><a href="?page=utama">Home</a></li>                              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu" >
                        <li><a href="?page=servis&actions=tampil">Data Servis</a></li>
                        <li><a href="?page=transaksi&actions=tampil">Transaksi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="?page=servis&actions=report">Laporan Data Servis</a></li> <li><a href="?page=transaksi&actions=report">Laporan Data Transaksi</a></li>       
                    </ul>
                </li>
                
                    <li><a href="?page=user&actions=tampil">User</a></li>
                    <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                <?php } elseif (isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                <li><a href="?page=utama">Home</a></li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="?page=servis&actions=report">Laporan Data Servis</a></li> <li><a href="?page=transaksi&actions=report">Laporan Data Transaksi</a></li>       
                    </ul>
                </li>                                
              <?php } ?>


                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                    
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
