<?php

/* CTEAccueilBundle:CTE:index.html.twig */
class __TwigTemplate_93594a7d7f5ec4cacb3e16f82c4b55ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd\">
<html xmlns=\"http://www.w3.org/1999xhtml\" xml:lang=\"fr_FR\" lang=\"fr_FR\">
\t<head>
\t\t<title>Accueil</title>
\t\t<meta content=\"text/html; charset=UTF-8\" http-equiv=\"content-type\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CTE/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CTE/css/AnnexeBootstrap.css"), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CTE/css/style.css"), "html", null, true);
        echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CTE/js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CTE/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CTE/js/js.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>
        <!-- Navigation bar  -->
        <div class=\"navigationBar\">
            <nav class=\"navbar navbar-default \" role=\"navigation\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\"><img class=\"logo_cte\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CTE/images/logo_cte.png"), "html", null, true);
        echo "\"> </a></li>
                </ul>
                <ul class=\"nav navbar-nav pull-right\">
                  <li>
                      <a href=\"#\" class=\"navigationAdministration\" onclick=\"afficherAdministration();\">
                          <span class=\"glyphicon glyphicon-cog\"></span>
                          </br>
                          Administration
                      </a>
                  </li>
                  <li>
                      <a href=\"#\" class=\"navigationSeance\">
                          <span class=\"glyphicon glyphicon-calendar\"></span>
                          </br>
                          Créer une séance
                      </a>
                  </li>
                  <li>
                      <a href=\"#\" class=\"navigationExercice\">
                          <span class=\"glyphicon glyphicon-book\"></span>
                          </br>
                          Créer un exercice
                      </a>
                  </li>
                  <li>
                      <a href=\"#\" class=\"navigationEvaluation\">
                          <span class=\"glyphicon glyphicon-check\"></span>
                          </br>
                          Créer une évaluation
                      </a>
                  </li>
                  <li>
                      <a href=\"#\"  class=\"navigationDeconnexion\">
                          <span class=\"glyphicon glyphicon-off\"></span>
                          </br>
                          Déconnexion
                      </a>
                  </li>
                </ul>
            </nav>
        </div>

        <!-- Container -->
        <div class=\"content\">
                <!--Sidebar content-->
            <div class=\"row\">
                <div class=\"btn-group\" id=\"administration\" style=\"\">
                    <button type=\"button\" class=\"btn btn-default\">Liste des intervenants</button>
                    <button type=\"button\" class=\"btn btn-default\">Liste des modules</button>
                    <button type=\"button\" class=\"btn btn-default\">Liste des classes</button>
                    <button type=\"button\" class=\"btn btn-default\">Liste des élèves</button>
                    <button type=\"button\" class=\"btn btn-default\">Liste des syllabus</button>
                    <button type=\"button\" class=\"btn btn-default\">Importation</button>
                </div>
            </div>
                <div class=\"clearfix\">
                    <div class=\"alert alert-warning\">
                        <strong>Oups !</strong>
                    </div>
                </div>


                    <!-- Classroom choice -->
                <div class=\"row\">
                    <div class=\"col-sm-9 col-sm-offset-3\">
                        <div class=\"tabbable\">
                            <ul class=\"nav nav-tabs\">
                                <li><a href=\"#B1\" data-toggle=\"tab\">B1</a></li>
                                <li><a href=\"#B2\" data-toggle=\"tab\">B2</a></li>
                                <li><a href=\"#B3\" data-toggle=\"tab\">B3</a></li>
                                <li><a href=\"#I4\" data-toggle=\"tab\">I4</a></li>
                                <li><a href=\"#I5\" data-toggle=\"tab\">I5</a></li>
                                <li><a href=\"#B3i\" data-toggle=\"tab\">B3 init</a></li>
                                <li><a href=\"#B3a\" data-toggle=\"tab\">B3 alt</a></li>
                                <li><a href=\"#I4i\" data-toggle=\"tab\">I4 init</a></li>
                                <li><a href=\"#I4a\" data-toggle=\"tab\">I4 alt</a></li>
                                <li><a href=\"#I5i\" data-toggle=\"tab\">I5 init</a></li>
                                <li><a href=\"#I5a\" data-toggle=\"tab\">I5 alt</a></li>
                            </ul>
                        </div>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane\" id=\"B1\">
                            </div>
                            <div class=\"tab-pane\" id=\"B2\">
                            </div>
                            <div class=\"tab-pane\" id=\"B3\">
                            </div>
                            <div class=\"tab-pane\" id=\"I4\">
                            </div>
                            <div class=\"tab-pane\" id=\"I5\">
                            </div>
                            <div class=\"tab-pane\" id=\"B3i\">
                            </div>
                            <div class=\"tab-pane\" id=\"B3a\">
                            </div>
                            <div class=\"tab-pane\" id=\"I4i\">
                            </div>
                            <div class=\"tab-pane\" id=\"I4a\">
                            </div>
                            <div class=\"tab-pane\" id=\"I5i\">
                            </div>
                            <div class=\"tab-pane\" id=\"I5a\">
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Module Choice -->
                <div class=\"row\">
                    <div class=\"tabbable tabs-left col-sm-3\">
                        <ul class=\"nav nav-tabs\">
                            <li><a href=\"#Francais\" data-toggle=\"tab\">Français</a></li>
                            <li><a href=\"#Anglais\" data-toggle=\"tab\">Anglais</a></li>
                            <li><a href=\"#Economie\" data-toggle=\"tab\">Economie</a></li>
                            <li><a href=\"#Réseau\" data-toggle=\"tab\">Réseau</a></li>
                            <li><a href=\"#Développement-Web\" data-toggle=\"tab\">Développement Web</a></li>
                            <li><a href=\"#Planification-de-Projet\" data-toggle=\"tab\">Planification de Projet</a></li>
                            <li><a href=\"#Langage-C#\" data-toggle=\"tab\">Langage C#</a></li>
                            <li><a href=\"#Projet-UE-Dev.-appl.-Objet-+-UE-GL\" data-toggle=\"tab\">Projet UE Dev. appl. Objet + UE-GL</a></li>
                        </ul>
                    </div>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane\" id=\"Francais\">
                        </div>
                        <div class=\"tab-pane\" id=\"Anglais\">
                        </div>
                        <div class=\"tab-pane\" id=\"Economie\">
                        </div>
                        <div class=\"tab-pane\" id=\"Réseau\">
                        </div>
                        <div class=\"tab-pane\" id=\"Développement-Web\">
                        </div>
                        <div class=\"tab-pane\" id=\"Planification-de-Projet\">
                        </div>
                        <div class=\"tab-pane\" id=\"Langage-C#\">
                        </div>
                        <div class=\"tab-pane\" id=\"Projet-UE-Dev.-appl.-Objet-+-UE-GL\">
                        </div>
                    </div>
                    <div class=\"col-sm-9 columnRight\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt aliquet nibh, consectetur accumsan est rhoncus id. Curabitur sit amet eros euismod, venenatis velit quis, ultricies tortor. Aenean sed nulla eget eros cursus cursus. Mauris tincidunt elit eget consequat rutrum. Nam nec dolor ultrices arcu suscipit ultrices eget eget sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec pellentesque a magna quis tristique. Sed rutrum ipsum sapien, id rutrum orci sodales et.

                            Pellentesque pretium blandit lacus, et hendrerit est facilisis eget. Curabitur vel pretium nulla, quis egestas ligula. Nullam quis dapibus nunc, a egestas libero. Maecenas quam justo, vestibulum ac fringilla non, tempor quis ligula. Fusce eget libero quis massa rutrum varius ac in risus. Curabitur eget dui enim. Duis pharetra pulvinar faucibus. Phasellus metus ligula, porttitor et vehicula at, mattis sed dui.
                    </div>
                </div>
            </div>
        </div>
\t</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "CTEAccueilBundle:CTE:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
