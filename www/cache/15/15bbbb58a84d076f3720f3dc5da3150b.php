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

/* index.twig */
class __TwigTemplate_a8b294ef09eb9db4643c38688137d6b0 extends Template
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
\t\t\t\tSistema de login
\t\t\t</h1>
\t\t\t<form class=\"login__form\" action=\"/auth/login\" method=\"POST\">
\t\t\t\t<div class=\"input\">
\t\t\t\t\t<label for=\"\" class=\"input__label\">
\t\t\t\t\t\tEmail
\t\t\t\t\t</label>
\t\t\t\t\t
\t\t\t\t\t<input type=\"email\" name=\"email\" type=\"text\" placeholder=\"usuario@examplo.com\" value=\"";
        // line 24
        (( !(null === $this->env->getFunction('old')->getCallable()("email"))) ? (print (twig_escape_filter($this->env, $this->env->getFunction('old')->getCallable()("email"), "html", null, true))) : (print ("usuario@examplo.com")));
        echo "\" class=\"input__input";
        echo ((($this->env->getFunction('get')->getCallable()("error") == "not-found")) ? (" error") : (""));
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input\">
\t\t\t\t\t<label for=\"\" class=\"input__label\">
\t\t\t\t\t\tSenha
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"password\" name=\"password\" type=\"text\" placeholder=\"*******\" class=\"input__input";
        // line 30
        echo ((($this->env->getFunction('get')->getCallable()("error") == "invalid-password")) ? (" error") : (""));
        echo "\" value=\"";
        (( !(null === $this->env->getFunction('old')->getCallable()("password"))) ? (print (twig_escape_filter($this->env, $this->env->getFunction('old')->getCallable()("password"), "html", null, true))) : (print ("teste")));
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input\">
\t\t\t\t\t<button class=\"input__button\">login</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  62 => 24,  37 => 1,);
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
\t\t\t\tSistema de login
\t\t\t</h1>
\t\t\t<form class=\"login__form\" action=\"/auth/login\" method=\"POST\">
\t\t\t\t<div class=\"input\">
\t\t\t\t\t<label for=\"\" class=\"input__label\">
\t\t\t\t\t\tEmail
\t\t\t\t\t</label>
\t\t\t\t\t
\t\t\t\t\t<input type=\"email\" name=\"email\" type=\"text\" placeholder=\"usuario@examplo.com\" value=\"{{ old('email') is not null ? old('email') :'usuario@examplo.com' }}\" class=\"input__input{{ get(\"error\") == 'not-found' ? ' error' : '' }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input\">
\t\t\t\t\t<label for=\"\" class=\"input__label\">
\t\t\t\t\t\tSenha
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"password\" name=\"password\" type=\"text\" placeholder=\"*******\" class=\"input__input{{ get(\"error\") == \"invalid-password\" ? ' error' : '' }}\" value=\"{{ old('password') is not null ? old('password') : 'teste' }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"input\">
\t\t\t\t\t<button class=\"input__button\">login</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</body>
</html>
", "index.twig", "/var/www/views/index.twig");
    }
}
