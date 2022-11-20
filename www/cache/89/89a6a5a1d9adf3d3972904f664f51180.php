<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* painel/index.twig */
class __TwigTemplate_a21c1dcf2989c401830cd125f2c650ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Document</title>
\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<div class=\"login\">
\t\t\t<h1>
\t\t\t\tLogado 👨‍💻
\t\t\t</h1>
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "painel/index.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Document</title>
\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<div class=\"login\">
\t\t\t<h1>
\t\t\t\tLogado 👨‍💻
\t\t\t</h1>
\t\t</div>
\t</body>
</html>
", "painel/index.twig", "/var/www/views/painel/index.twig");
    }
}
