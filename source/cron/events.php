<?php
    $path = ''; // live
    $path = 'http://localhost/wp16/build_local/'; // local

    require_once __DIR__ . '/vendor/autoload.php';
?>
<?php include 'events-header.php' ?>

                <div class="col l4 m6 s12 card-event card-invisible">
                    <div class="card small">
                        <div class="card-stacked">
                            <div class="card-content">
                                <i class="material-icons right card-icon">school</i>
                                <span class="card-events-day">Tag</span><br>
                                <span class="card-events-startdate">Datum Start</span><br>
                                <span class="card-events-enddate">Datum Ende</span>
                                <span class="card-events-time">Zeit</span><br>
                                <br>
                                <span class="card-events-title">Web Professionals</span><br>
                                <br>
                                <span class="card-events-location">Location</span>
                            </div>
                            <div class="card-action">
                                <a href="/lehrgaenge/web-integrator/" target="_blank">weitere Infos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include 'events-footer.php' ?>