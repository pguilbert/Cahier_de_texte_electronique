<!DOCTYPE html>
<html xml:lang="fr_FR" lang="fr_FR">
<head>
    <title>Acceuil</title>

    <meta content="text/html; charset=UTF-8" http-equiv="content-type"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/AnnexeBootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <script type="text/javascript" src="js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
</head>
<body>

<header class="navbar navbar-default" role="navigation">
    <ul class="brand nav navbar-nav">
        <li class="active"><a href="#"><img src="img/logo_cte.png"></a></li>
    </ul>

    <nav>
        <ul class="nav navbar-nav pull-right">
            <li>
                <a href="#Admin" class="navigationAdministration" onclick="afficherAdministration();">
                    <span class="glyphicon glyphicon-cog"></span>

                    Administration
                </a>
            </li>
            <li>
                <a href="#Seance" class="navigationSeance">
                    <span class="glyphicon glyphicon-calendar"></span>
                    Créer une séance
                </a>
            </li>
            <li>
                <a href="#Exercice" class="navigationExercice">
                    <span class="glyphicon glyphicon-book"></span>
                    Créer un exercice
                </a>
            </li>
            <li>
                <a href="#Evalutation" class="navigationEvaluation">
                    <span class="glyphicon glyphicon-check"></span>
                    Créer une évaluation
                </a>
            </li>
            <li>
                <a href="#Deconnexion" class="navigationDeconnexion">
                    <span class="glyphicon glyphicon-off"></span>
                    Déconnexion
                </a>
            </li>
        </ul>
    </nav>
</header>

<div id="administration">
    <div class="btn-group">
        <button type="button" class="btn btn-default">Liste des intervenants</button>
        <button type="button" class="btn btn-default">Liste des modules</button>
        <button type="button" class="btn btn-default">Liste des classes</button>
        <button type="button" class="btn btn-default">Liste des élèves</button>
        <button type="button" class="btn btn-default">Liste des syllabus</button>
        <button type="button" class="btn btn-default">Importation</button>
    </div>
</div>

<section id="notification">
    <div class="alert alert-warning">
        <strong>Oups !</strong>
    </div>
</section>

<section id="content">
    <!-- Classroom choice -->
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li><a href="#B1" data-toggle="tab">B1</a></li>
                    <li><a href="#B2" data-toggle="tab">B2</a></li>
                    <li><a href="#B3" data-toggle="tab">B3</a></li>
                    <li><a href="#I4" data-toggle="tab">I4</a></li>
                    <li><a href="#I5" data-toggle="tab">I5</a></li>
                    <li><a href="#B3i" data-toggle="tab">B3 init</a></li>
                    <li><a href="#B3a" data-toggle="tab">B3 alt</a></li>
                    <li><a href="#I4i" data-toggle="tab">I4 init</a></li>
                    <li><a href="#I4a" data-toggle="tab">I4 alt</a></li>
                    <li><a href="#I5i" data-toggle="tab">I5 init</a></li>
                    <li><a href="#I5a" data-toggle="tab">I5 alt</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane" id="B1">
                </div>
                <div class="tab-pane" id="B2">
                </div>
                <div class="tab-pane" id="B3">
                </div>
                <div class="tab-pane" id="I4">
                </div>
                <div class="tab-pane" id="I5">
                </div>
                <div class="tab-pane" id="B3i">
                </div>
                <div class="tab-pane" id="B3a">
                </div>
                <div class="tab-pane" id="I4i">
                </div>
                <div class="tab-pane" id="I4a">
                </div>
                <div class="tab-pane" id="I5i">
                </div>
                <div class="tab-pane" id="I5a">
                </div>
            </div>
        </div>
    </div>

    <!-- Module Choice -->
    <div class="row">
        <div class="tabbable tabs-left col-sm-3">
            <ul class="nav nav-tabs">
                <li><a href="#Francais" data-toggle="tab">Français</a></li>
                <li><a href="#Anglais" data-toggle="tab">Anglais</a></li>
                <li><a href="#Economie" data-toggle="tab">Economie</a></li>
                <li><a href="#Réseau" data-toggle="tab">Réseau</a></li>
                <li><a href="#Développement-Web" data-toggle="tab">Développement Web</a></li>
                <li><a href="#Planification-de-Projet" data-toggle="tab">Planification de Projet</a></li>
                <li><a href="#Langage-C#" data-toggle="tab">Langage C#</a></li>
                <li><a href="#Projet-UE-Dev.-appl.-Objet-+-UE-GL" data-toggle="tab">Projet UE Dev. appl. Objet +
                        UE-GL</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane" id="Francais">
            </div>
            <div class="tab-pane" id="Anglais">
            </div>
            <div class="tab-pane" id="Economie">
            </div>
            <div class="tab-pane" id="Réseau">
            </div>
            <div class="tab-pane" id="Développement-Web">
            </div>
            <div class="tab-pane" id="Planification-de-Projet">
            </div>
            <div class="tab-pane" id="Langage-C#">
            </div>
            <div class="tab-pane" id="Projet-UE-Dev.-appl.-Objet-+-UE-GL">
            </div>
        </div>
        <div class="col-sm-9 columnRight">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt aliquet nibh, consectetur
            accumsan est rhoncus id. Curabitur sit amet eros euismod, venenatis velit quis, ultricies tortor. Aenean sed
            nulla eget eros cursus cursus. Mauris tincidunt elit eget consequat rutrum. Nam nec dolor ultrices arcu
            suscipit ultrices eget eget sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
            inceptos himenaeos. Donec pellentesque a magna quis tristique. Sed rutrum ipsum sapien, id rutrum orci
            sodales et.

            Pellentesque pretium blandit lacus, et hendrerit est facilisis eget. Curabitur vel pretium nulla, quis
            egestas ligula. Nullam quis dapibus nunc, a egestas libero. Maecenas quam justo, vestibulum ac fringilla
            non, tempor quis ligula. Fusce eget libero quis massa rutrum varius ac in risus. Curabitur eget dui enim.
            Duis pharetra pulvinar faucibus. Phasellus metus ligula, porttitor et vehicula at, mattis sed dui.

            <!--In a adipiscing mauris. Vestibulum fermentum convallis lacus. Sed dignissim aliquet est sed luctus. Aenean et nisi a augue aliquet faucibus. Morbi tristique aliquet lectus, sed commodo elit tempor ut. Curabitur egestas hendrerit nisi vel tincidunt. Quisque id nibh gravida, suscipit lacus ultricies, suscipit diam.

            In commodo semper lorem in congue. Nullam venenatis ligula in nisi suscipit, vel congue ante luctus. Suspendisse sodales tortor dolor, nec pellentesque lorem volutpat id. Quisque at metus eget lorem varius faucibus vitae nec massa. Praesent nec rutrum mauris. Suspendisse interdum, velit ac lacinia elementum, lorem purus molestie leo, imperdiet blandit ante tellus vehicula augue. Duis sagittis cursus semper. Vivamus sollicitudin vestibulum mauris, vitae posuere sapien gravida ac. Cras ac pharetra ipsum, ullamcorper gravida leo. Morbi porta leo et ipsum posuere, quis gravida eros auctor. Duis rutrum enim in ante consequat, ut tristique orci varius.

            Donec non enim varius enim ultrices consectetur. Nulla non gravida eros. Etiam vel neque interdum, lacinia purus non, interdum velit. Duis molestie ipsum nisl, sed hendrerit neque auctor vehicula. Mauris mollis fringilla ligula, quis lacinia nisi convallis malesuada. Praesent consequat, ligula rhoncus iaculis vulputate, nulla mauris scelerisque sapien, in suscipit sem elit et lectus. Maecenas vitae tortor nec quam lobortis mollis. Cras egestas molestie pellentesque. Cras congue orci quis blandit pellentesque. Vestibulum vulputate dui eleifend mi lacinia, ac rhoncus velit egestas. Nulla facilisi. Nullam fringilla viverra justo ac lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam rhoncus diam eu accumsan tincidunt.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt aliquet nibh, consectetur accumsan est rhoncus id. Curabitur sit amet eros euismod, venenatis velit quis, ultricies tortor. Aenean sed nulla eget eros cursus cursus. Mauris tincidunt elit eget consequat rutrum. Nam nec dolor ultrices arcu suscipit ultrices eget eget sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pellentesque a magna quis tristique. Sed rutrum ipsum sapien, id rutrum orci sodales et. Pellentesque pretium blandit lacus, et hendrerit est facilisis eget. Curabitur vel pretium nulla, quis egestas ligula. Nullam quis dapibus nunc, a egestas libero. Maecenas quam justo, vestibulum ac fringilla non, tempor quis ligula. Fusce eget libero quis massa rutrum varius ac in risus. Curabitur eget dui enim. Duis pharetra pulvinar faucibus. Phasellus metus ligula, porttitor et vehicula at, mattis sed dui. In a adipiscing mauris. Vestibulum fermentum convallis lacus. Sed dignissim aliquet est sed luctus. Aenean et nisi a augue aliquet faucibus. Morbi tristique aliquet lectus, sed commodo elit tempor ut. Curabitur egestas hendrerit nisi vel tincidunt. Quisque id nibh gravida, suscipit lacus ultricies, suscipit diam. In commodo semper lorem in congue. Nullam venenatis ligula in nisi suscipit, vel congue ante luctus. Suspendisse sodales tortor dolor, nec pellentesque lorem volutpat id. Quisque at metus eget lorem varius faucibus vitae nec massa. Praesent nec rutrum mauris. Suspendisse interdum, velit ac lacinia elementum, lorem purus molestie leo, imperdiet blandit ante tellus vehicula augue. Duis sagittis cursus semper. Vivamus sollicitudin vestibulum mauris, vitae posuere sapien gravida ac. Cras ac pharetra ipsum, ullamcorper gravida leo. Morbi porta leo et ipsum posuere, quis gravida eros auctor. Duis rutrum enim in ante consequat, ut tristique orci varius. Donec non enim varius enim ultrices consectetur. Nulla non gravida eros. Etiam vel neque interdum, lacinia purus non, interdum velit. Duis molestie ipsum nisl, sed hendrerit neque auctor vehicula. Mauris mollis fringilla ligula, quis lacinia nisi convallis malesuada. Praesent consequat, ligula rhoncus iaculis vulputate, nulla mauris scelerisque sapien, in suscipit sem elit et lectus. Maecenas vitae tortor nec quam lobortis mollis. Cras egestas molestie pellentesque. Cras congue orci quis blandit pellentesque. Vestibulum vulputate dui eleifend mi lacinia, ac rhoncus velit egestas. Nulla facilisi. Nullam fringilla viverra justo ac lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam rhoncus diam eu accumsan tincidunt.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt aliquet nibh, consectetur accumsan est rhoncus id. Curabitur sit amet eros euismod, venenatis velit quis, ultricies tortor. Aenean sed nulla eget eros cursus cursus. Mauris tincidunt elit eget consequat rutrum. Nam nec dolor ultrices arcu suscipit ultrices eget eget sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pellentesque a magna quis tristique. Sed rutrum ipsum sapien, id rutrum orci sodales et. Pellentesque pretium blandit lacus, et hendrerit est facilisis eget. Curabitur vel pretium nulla, quis egestas ligula. Nullam quis dapibus nunc, a egestas libero. Maecenas quam justo, vestibulum ac fringilla non, tempor quis ligula. Fusce eget libero quis massa rutrum varius ac in risus. Curabitur eget dui enim. Duis pharetra pulvinar faucibus. Phasellus metus ligula, porttitor et vehicula at, mattis sed dui. In a adipiscing mauris. Vestibulum fermentum convallis lacus. Sed dignissim aliquet est sed luctus. Aenean et nisi a augue aliquet faucibus. Morbi tristique aliquet lectus, sed commodo elit tempor ut. Curabitur egestas hendrerit nisi vel tincidunt. Quisque id nibh gravida, suscipit lacus ultricies, suscipit diam. In commodo semper lorem in congue. Nullam venenatis ligula in nisi suscipit, vel congue ante luctus. Suspendisse sodales tortor dolor, nec pellentesque lorem volutpat id. Quisque at metus eget lorem varius faucibus vitae nec massa. Praesent nec rutrum mauris. Suspendisse interdum, velit ac lacinia elementum, lorem purus molestie leo, imperdiet blandit ante tellus vehicula augue. Duis sagittis cursus semper. Vivamus sollicitudin vestibulum mauris, vitae posuere sapien gravida ac. Cras ac pharetra ipsum, ullamcorper gravida leo. Morbi porta leo et ipsum posuere, quis gravida eros auctor. Duis rutrum enim in ante consequat, ut tristique orci varius. Donec non enim varius enim ultrices consectetur. Nulla non gravida eros. Etiam vel neque interdum, lacinia purus non, interdum velit. Duis molestie ipsum nisl, sed hendrerit neque auctor vehicula. Mauris mollis fringilla ligula, quis lacinia nisi convallis malesuada. Praesent consequat, ligula rhoncus iaculis vulputate, nulla mauris scelerisque sapien, in suscipit sem elit et lectus. Maecenas vitae tortor nec quam lobortis mollis. Cras egestas molestie pellentesque. Cras congue orci quis blandit pellentesque. Vestibulum vulputate dui eleifend mi lacinia, ac rhoncus velit egestas. Nulla facilisi. Nullam fringilla viverra justo ac lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam rhoncus diam eu accumsan tincidunt.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt aliquet nibh, consectetur accumsan est rhoncus id. Curabitur sit amet eros euismod, venenatis velit quis, ultricies tortor. Aenean sed nulla eget eros cursus cursus. Mauris tincidunt elit eget consequat rutrum. Nam nec dolor ultrices arcu suscipit ultrices eget eget sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pellentesque a magna quis tristique. Sed rutrum ipsum sapien, id rutrum orci sodales et. Pellentesque pretium blandit lacus, et hendrerit est facilisis eget. Curabitur vel pretium nulla, quis egestas ligula. Nullam quis dapibus nunc, a egestas libero. Maecenas quam justo, vestibulum ac fringilla non, tempor quis ligula. Fusce eget libero quis massa rutrum varius ac in risus. Curabitur eget dui enim. Duis pharetra pulvinar faucibus. Phasellus metus ligula, porttitor et vehicula at, mattis sed dui. In a adipiscing mauris. Vestibulum fermentum convallis lacus. Sed dignissim aliquet est sed luctus. Aenean et nisi a augue aliquet faucibus. Morbi tristique aliquet lectus, sed commodo elit tempor ut. Curabitur egestas hendrerit nisi vel tincidunt. Quisque id nibh gravida, suscipit lacus ultricies, suscipit diam. In commodo semper lorem in congue. Nullam venenatis ligula in nisi suscipit, vel congue ante luctus. Suspendisse sodales tortor dolor, nec pellentesque lorem volutpat id. Quisque at metus eget lorem varius faucibus vitae nec massa. Praesent nec rutrum mauris. Suspendisse interdum, velit ac lacinia elementum, lorem purus molestie leo, imperdiet blandit ante tellus vehicula augue. Duis sagittis cursus semper. Vivamus sollicitudin vestibulum mauris, vitae posuere sapien gravida ac. Cras ac pharetra ipsum, ullamcorper gravida leo. Morbi porta leo et ipsum posuere, quis gravida eros auctor. Duis rutrum enim in ante consequat, ut tristique orci varius. Donec non enim varius enim ultrices consectetur. Nulla non gravida eros. Etiam vel neque interdum, lacinia purus non, interdum velit. Duis molestie ipsum nisl, sed hendrerit neque auctor vehicula. Mauris mollis fringilla ligula, quis lacinia nisi convallis malesuada. Praesent consequat, ligula rhoncus iaculis vulputate, nulla mauris scelerisque sapien, in suscipit sem elit et lectus. Maecenas vitae tortor nec quam lobortis mollis. Cras egestas molestie pellentesque. Cras congue orci quis blandit pellentesque. Vestibulum vulputate dui eleifend mi lacinia, ac rhoncus velit egestas. Nulla facilisi. Nullam fringilla viverra justo ac lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam rhoncus diam eu accumsan tincidunt.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt aliquet nibh, consectetur accumsan est rhoncus id. Curabitur sit amet eros euismod, venenatis velit quis, ultricies tortor. Aenean sed nulla eget eros cursus cursus. Mauris tincidunt elit eget consequat rutrum. Nam nec dolor ultrices arcu suscipit ultrices eget eget sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pellentesque a magna quis tristique. Sed rutrum ipsum sapien, id rutrum orci sodales et. Pellentesque pretium blandit lacus, et hendrerit est facilisis eget. Curabitur vel pretium nulla, quis egestas ligula. Nullam quis dapibus nunc, a egestas libero. Maecenas quam justo, vestibulum ac fringilla non, tempor quis ligula. Fusce eget libero quis massa rutrum varius ac in risus. Curabitur eget dui enim. Duis pharetra pulvinar faucibus. Phasellus metus ligula, porttitor et vehicula at, mattis sed dui. In a adipiscing mauris. Vestibulum fermentum convallis lacus. Sed dignissim aliquet est sed luctus. Aenean et nisi a augue aliquet faucibus. Morbi tristique aliquet lectus, sed commodo elit tempor ut. Curabitur egestas hendrerit nisi vel tincidunt. Quisque id nibh gravida, suscipit lacus ultricies, suscipit diam. In commodo semper lorem in congue. Nullam venenatis ligula in nisi suscipit, vel congue ante luctus. Suspendisse sodales tortor dolor, nec pellentesque lorem volutpat id. Quisque at metus eget lorem varius faucibus vitae nec massa. Praesent nec rutrum mauris. Suspendisse interdum, velit ac lacinia elementum, lorem purus molestie leo, imperdiet blandit ante tellus vehicula augue. Duis sagittis cursus semper. Vivamus sollicitudin vestibulum mauris, vitae posuere sapien gravida ac. Cras ac pharetra ipsum, ullamcorper gravida leo. Morbi porta leo et ipsum posuere, quis gravida eros auctor. Duis rutrum enim in ante consequat, ut tristique orci varius. Donec non enim varius enim ultrices consectetur. Nulla non gravida eros. Etiam vel neque interdum, lacinia purus non, interdum velit. Duis molestie ipsum nisl, sed hendrerit neque auctor vehicula. Mauris mollis fringilla ligula, quis lacinia nisi convallis malesuada. Praesent consequat, ligula rhoncus iaculis vulputate, nulla mauris scelerisque sapien, in suscipit sem elit et lectus. Maecenas vitae tortor nec quam lobortis mollis. Cras egestas molestie pellentesque. Cras congue orci quis blandit pellentesque. Vestibulum vulputate dui eleifend mi lacinia, ac rhoncus velit egestas. Nulla facilisi. Nullam fringilla viverra justo ac lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam rhoncus diam eu accumsan tincidunt.
-->
        </div>
    </div>
</section>

</body>
</html>


