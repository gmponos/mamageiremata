<?= $this->element('landing/sidebar'); ?>
<?= $this->element('landing/landing'); ?>
<section id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="media">
                    <a class="media-left media-middle" href="#">
                        <?= $this->Html->image('mamageirissa1.web.png', ['alt' => 'Μαμαγείρισσα... για σπιτικό φαγητό']); ?>
                    </a>
                    <div class="media-body">
                        <h2>Η κουζίνα μας</h2>
                        <hr class="small">
                        <p class="lead">
                            Καλώς ορίσατε, στη φιλόξενη κουζίνα μας! Καθημερινά θα ετοιμάζουμε για σας μια
                            ποικιλία μεσογειακής διατροφής με γνώριμες γεύσεις και αρώματα που θα σας ταξιδέψουν
                            πίσω στην κουζίνα της μαμάς… ή της γιαγιάς σας! Κάθε μέρα θα μαγειρεύουμε λαδερά,
                            όσπρια, χειροποίητες πίτες, κιμάδες και κρεατικά με μεράκι και φροντίδα, σα να τα
                            ετοιμάζουμε για την οικογένειά μας, δηλαδή ορισμένη ποσότητα, αγνά υλικά, ανάλογα
                            την εποχή και την έμπνευσή μας!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="bg-primary">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="media">
                        <a class="pull-right media-middle" href="#">
                            <?= $this->Html->image('mamageirissa2.web.png', ['alt' => 'Μαμαγείρισσα... για σπιτικό φαγητό']); ?>
                        </a>
                        <div class="media-body">
                            <h2>Τα υλικά μας</h2>
                            <hr class="small">
                            <p class="lead">
                                Τα υλικά μας είναι επιλεγμένα απο εμάς και με άποψη! Χρησιμοποιούμε έξτρα
                                παρθένο ελαιόλαδο (και στα τηγανιτά), το ψωμί είναι ζυμωτό, πίτες με φύλλο
                                «ανοιγμένο»
                                απο τα χεράκια μας, σαλάτες φρέσκες εποχής, κρεατικά Ελληνικά νωπά, παραδοσιακά
                                ζυμαρικά, φρεσκοαλεσμένα μπαχαρικά.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<header id="place" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#place" data-slide-to="0" class="active"></li>
        <li data-target="#place" data-slide-to="1"></li>
        <li data-target="#place" data-slide-to="2"></li>
        <li data-target="#place" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/carousel1.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/carousel2.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/carousel3.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/carousel5.jpg');"></div>
        </div>
    </div>
</header>
<section id="menou" class="menou">
    <div class="container text-center">
        <h2>Τα μαγειρευτά μας</h2>
        <hr class="small">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <div class="col-sm-6">
                        <?php foreach ($menu['main'] as $day => $dayMenu): ?>
                        <h4><?= $day ?></h4>
                        <ul class="list-unstyled">
                            <?php foreach ($dayMenu as $item): ?>
                                <li>
                                    <span tabindex="0" class="menu" data-content="<?= $item['description'] ?>">
                                        <?= $item['title'] . ' ' . $item['price'] . ' €' ?>
                                    </span>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <?php endforeach ?>
                    <div class="col-sm-6">
                        <h4>Τρίτη</h4>
                        <ul class="list-unstyled">
                            <li>
                                <span>Χοιρινό πρασοσέλινο 6,50 €</span>
                            </li>
                            <li><span>Λαχανοντολμάδες 6,00 €</span></li>
                            <li>
                                <span>Γιουβαρλάκια 6,00 €</span>
                            </li>
                            <li>
                                <span>Ρεβύθια 5,00 €</span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Ψητή τσιπούρα στο φούρνο. Συνοδεύεται με σαλάτα λάχανο και καρότο">
                                    Τσιπούρες (συνοδεία σαλάτα) 8,00 €
                                </span>
                            </li>
                            <li>
                                <span>Κοτόπουλο κοκκινιστό 6,00 €</span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Λαχταριστός κοκκινιστός αρακάς ο οποίος συνοδεύεται από πατάτες">
                                    Αρακάς 5,00 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Μοσχαρίσιο συκώτι φούρνου. Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτες τηγανιτές">
                                    Συκώτι λαδορίγανη 6,00 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="2 τεμάχια από μοσχαρίσιο κιμά. Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτες τηγανιτές">
                                    Μπιφτέκια μοσχαρίσια με πατάτες 6,00 €
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Τετάρτη</h4>
                        <ul class="list-unstyled">
                            <li>
                                <span>Μοσχάρι λεμονάτο 7,00 €</span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Με μοσχαρίσιο κιμά και μπεσαμέλ">
                                    Παστίτσιο 6,00 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Γαρνίρεται κατά προτίμηση με κοφτό μακαρονάκι αλλά μπορείτε επίσης με ρύζι, μακαρόνια ή πατάτες τηγανιτές.">
                                    Σουπιές κοκκινιστές με κοφτό μακαρονάκι 7,00 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Με καρότο και κρεμμύδι">
                                    Κοτόσουπα 6,00 €
                                </span>
                            </li>
                            <li><span>Ρεβύθια 5,00 €</span></li>
                            <li><span>Σπανακόρυζο 6,00 €</span></li>
                            <li>
                                <span class="menu" data-content="Από σπάλα. Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτες τηγανιτές." tabindex="0">
                                    Χοιρινό με πατάτες 6,50 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Με κόκκινη σάλτσα και μυροδικά.">Γίγαντες 5,00 €</span>
                            </li>
                            <li>
                                <span class="menu" data-content="Στήθος κοτόπουλου σε σάλτσα με γιαούρτι μουστάρδα μπέικον και μανιτάρια. Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτες τηγανιτές." tabindex="0">
                                    Κοτόπουλο με σως γιαουριού 7,00 €
                                </span>
                            </li>
                            <li>
                                <span>Κεφτέδες στη σάλτσα 6,00 €</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>Πέμπτη</h4>
                        <ul class="list-unstyled">
                            <li>
                                <span tabindex="0" class="menu" data-content="Κοκκινιστό κρασάτο χοιρινό κατσαρόλας">
                                    Χοιρινό ροστό με μακαρούνες 6,50 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="2 τεμάχια από στήθος κοτόπουλου. Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτες τηγανιτές">
                                    Μπιφτέκια κοτόπουλου με πατάτες 6,50 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Ένα χορταστικό κομμάτι μουσακά με μοσχαρίσιο κιμά και μπεσαμέλ">
                                    Μουσακάς 6,00 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Φιλέτο με κόκκινη σάλτσα. Συνοδεύεται από πατάτες">
                                    Πέρκα πλακί 6,00 €
                                </span>
                            </li>
                            <li>
                                <span>Λαχανόρυζο 5,00 €</span>
                            </li>
                            <li><span>Φασολάδα 5,00 €</span></li>
                            <li>Φακές 5,00 €</li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Κοκκινιστά σουτζουκάκια από μοσχαρίσιο κιμά. Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτες τηγανιτές">
                                    Σουτζουκάκια στη σάλτσα 6,00 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Μοσχαρίσιο συκώτι φούρνου. Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτες τηγανιτές">
                                    Συκώτι λαδορίγανη 6,00 €
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Παρασκευή</h4>
                        <ul class="list-unstyled">
                            <li>
                                <span>Μοσχάρι στιφάδο 8,00 €</span>
                            </li>
                            <li>Μπιφτέκια μοσχαρίσια με πατάτες 6,00 €</li>
                            <li>Χταπόδι με κοφτό μακαρονάκι 8,00 €</li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Με μοσχαρίσιο κιμά και μπεσαμέλ">
                                    Παστίτσιο 6,00 €
                                </span>
                            </li>
                            <li>
                                <span>Ρεβύθια 5,00 €</span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="2 τεμάχια με ρύζι και υπέροχα μυρωδικά. Συνοδεύεται από πατάτες φούρνου">
                                    Γεμιστά 5,50 €
                                </span>
                            </li>
                            <li>
                                <span>Σπανακόρυζο 6,00 €</span>
                            </li>
                            <li>Γιουβαρλάκια 6,00 €</li>
                            <li>Κοτόπουλο αλλιώς 6,00 €</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>Σαββάτο</h4>
                        <ul class="list-unstyled">
                            <li>
                                <span tabindex="0" class="menu" data-content="Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτετες τηγανιτές">
                                    Χοιρινές μπριζόλες με πατάτες 6,50 €
                                </span>
                            </li>
                            <li>
                                <span>Σουφλέ 7,00 €</span>
                            </li>
                            <li>
                                <span>Κοτόσουπα 6,00 €</span>
                            </li>
                            <li>
                                <span>Κοτόπουλο κοκκινιστό με χυλοπιτάκι 6,00 €</span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Με κόκκινη σάλτσα και μυροδικά.">
                                    Γίγαντες 5,00 €
                                </span>
                            </li>
                            <li>
                                <span tabindex="0" class="menu" data-content="Από μοσχαρίσιο κιμά γεμιστό με φέτα και πιπεριά. Γαρνίρεται με πατάτες φούρνου, ρύζι, μακαρόνια ή πατάτετες τηγανιτές">
                                    Ρολό τσαχπίνικο 6,00 €
                                </span>
                            </li>
                            <li>
                                Λαχανοντολμάδες 6,00 €
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#order" class="btn btn-dark">Παραγγείλτε!!</a>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary" id="salads">
    <div class="container text-center">
        <h2>Τα συνοδευτικά μας</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="portfolio-item">
                    <h4>Σαλάτες</h4>
                    <ul class="list-unstyled">
                        <li>Χωριάτικη 5,00 €</li>
                        <li>Ανάμεικτη 4,00 €</li>
                        <li>Αγγουροντομάτα 3,00 €</li>
                        <li>Λάχανο – καρότο 3,00 €</li>
                        <li>Ντάκος 5,00 €</li>
                        <li>Κοτοσαλάτα 5,00 €</li>
                        <li>Μαρούλι 3,00 €</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-item">
                    <h4>Ορεκτικά</h4>
                    <ul class="list-unstyled">
                        <li>Φέτα 2,50 €</li>
                        <li>Πατάτες τηγανητές 3,00 €</li>
                        <li>Τζατζίκι 2,50 €</li>
                        <li>Ρύζι 2,00 €</li>
                        <li>Τυροκαυτερή 2,50 €</li>
                        <li>Σπαγγέτι 3,00 €</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Αναψυκτικά</h4>
                <ul class="list-unstyled">
                    <li>Coca Cola 330ml 1,00 €</li>
                    <li>Coca Cola 330ml (light, Zero) 1,00 €</li>
                    <li>Εψα 330ml (κόκκινη) 1,00 €</li>
                    <li>Εψα Λεμόνι 330ml 1,00 €</li>
                    <li>Εψα Γκαζόζα 330ml 1,00 €</li>
                    <li>Coca Cola 1lt 2,50 €</li>
                    <li>Coca Cola 1lt (light) 2,50 €</li>
                    <li>Νερό 500ml 0,50 €</li>
                </ul>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <p>
                    Οι πίτες μας, αναλόγως την γέμιση τους, από 4 έως 6 ευρώ.
                    Κάθε που τα υλικά θά ’ναι κατάλληλα θα παίρνει φωτιά ο πλάστης! Όλες μμμ… γεύσεις
                    λαχταριστές!!
                    Ψάρια-Θαλασσινά από 5 έως 8,50€…γιατί κάθε πράγμα στον καιρό του και ο κολιός.. τον
                    Αύγουστο.
                </p>
            </div>
        </div>
        <a href="#order" class="btn btn-dark">Παραγγείλτε!!</a>
    </div>
</section>
<section id="order">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <p class="lead">
                    Οι Μαμαγείρισσες θα σας έχουμε συχνά και μαμαγειρέματα έκπληξη! Τηλεφωνήστε μας να
                    μάθετε ή περάστε απ' την κουζίνα μας να δοκιμάσετε και να διαλέξετε!
                </p>
                <h4><strong><i class="fa fa-phone fa-fw"></i> 210 5312003</strong></h4>
                <h4><strong><i class="fa fa-phone fa-fw"></i> 210 5312333</strong></h4>
                <h4><strong><i class="fa fa-mobile-phone fa-fw"></i> 697 8033194 (Cosmote)</strong></h4>
                <h4><strong>Με ένα τηλεφώνημα μυρωδάτα δέματα έρχονται</strong></h4>
                <h4><strong>στη πόρτα σας από Μαμαγείρισσες</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-envelope-o fa-fw"></i>
                        <a href="mailto:info@mamageiremata.gr">info@mamageiremata.gr</a>
                    </li>
                </ul>
                <p>Κερασούντος 23, Αιγάλεω, 12244</p>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/Mamageiremata">
                            <i class="fa fa-facebook fa-fw fa-2x text-danger"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/mamageiremata">
                            <i class="fa fa-twitter fa-fw fa-2x text-danger"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/103677758442524630585/about">
                            <i class="fa fa-google-plus fa-fw fa-2x text-danger"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</section>
<section id="map" class="map">
    <iframe src="https://maps.google.gr/maps?hl=el&q=kerasountos+23+aigaleo&sll=37.993529,23.681245&sspn=0.003686,0.006968&t=m&z=16&ll=37.993244,23.681262&iwloc=near&streetviewcontrol=true&scrollwheelcontrol=false&poweredby=false&directionhint=false&output=embed"
            id="google-map" style="pointer-events:none">
        <br/>
        <small>
            <a href="https://maps.google.gr/maps?hl=el&q=kerasountos+23+aigaleo&sll=37.993529,23.681245&sspn=0.003686,0.006968&t=m&z=16&ll=37.993244,23.681262&iwloc=near&streetviewcontrol=true&scrollwheelcontrol=false&poweredby=false&directionhint=false&output=embed"></a>
        </small>
    </iframe>
</section>
<?= $this->element('landing/footer'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
    // Popover for menu items
    $('.menu').popover({
        trigger: 'hover',
        placement: 'top'
    });

    // Closes the sidebar menu
    $("#menu-close").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $('.carousel').carousel({
        interval: 4000 //Carousel Speed
    })
</script>
