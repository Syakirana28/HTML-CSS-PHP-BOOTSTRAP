<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!"><?= $logo ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php 
                        foreach ($nav as $key => $value):?>
                        <li class="nav-item">
                            <a class="nav-link"  
                            aria-current="page" href="<?= $value; ?>"><?= $key ?></a></li>
                            <?php endforeach; ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">Service</a></li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>