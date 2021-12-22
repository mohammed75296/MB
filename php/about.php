<?php
    $pagtiltel = "Abuot";
    include 'init.php';
    
?> 
    <link rel = "stylesheet" href = "<?php echo $css ?>back2.css"/>
        <div class="img"><img src="layout/imges/pexels-monoar-rahman-109371.jpg" class="d-block w-100" alt="..."></div>
        <div class="abuot wow animate__animated animate__fadeInLeftBig" data-wow-duration = "2s" data-wow-delay = "2s" data-wow-offset = "50">
            <p>my name is mohammed bashir I'm currently studying at AL-Neelin University,Faculty of Engineering, specializing in Coumputer Engineering    
                I'm junior backend and frontend developer </p>
        </div>
        <hr>
        <div class="skile wow animate__animated animate__fadeInRight" data-wow-duration ="2s" data-wow-delay = "3s" data-wow-offset = "100">
            <div class="myskil"><P>My skiles </P></div>
        </div>
    <section class = "skiles wow animate__animated animate__fadeInUpBig" data-wow-duration ="2s" data-wow-delay = "2s" data-wow-offset = "150">
        <div class="contaier">
            <div class="row">
                <div class="col-lg-4">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">BOTSRAP</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">PHP</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Python</div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="90">HTML/CSS</div>
                </div>
            </div>
        </div>
    </section>
<?php include $tpl.'foter.php';?>
