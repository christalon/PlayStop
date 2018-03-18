<?php

/* localisation/currency_form.twig */
class __TwigTemplate_575e4bbac46b4b93dd93084be3b635585eee414abb0890970acf08b3c2b7680f extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-currency\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-light\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "            <li class=\"breadcrumb-item\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ol>
      </nav>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 24
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo (isset($context["text_iso"]) ? $context["text_iso"] : null);
        echo "</div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 28
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-title\">";
        // line 30
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" value=\"";
        // line 32
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" id=\"input-title\" class=\"form-control\"/>
              ";
        // line 33
        if ((isset($context["error_title"]) ? $context["error_title"] : null)) {
            // line 34
            echo "                <div class=\"invalid-tooltip\">";
            echo (isset($context["error_title"]) ? $context["error_title"] : null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-code\">";
        // line 39
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 41
        echo (isset($context["code"]) ? $context["code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
              <small class=\"form-text text-muted\">";
        // line 42
        echo (isset($context["help_code"]) ? $context["help_code"] : null);
        echo "</small>
              ";
        // line 43
        if ((isset($context["error_code"]) ? $context["error_code"] : null)) {
            // line 44
            echo "                <div class=\"invalid-tooltip\">";
            echo (isset($context["error_code"]) ? $context["error_code"] : null);
            echo "</div>
              ";
        }
        // line 46
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-symbol-left\">";
        // line 49
        echo (isset($context["entry_symbol_left"]) ? $context["entry_symbol_left"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_left\" value=\"";
        // line 51
        echo (isset($context["symbol_left"]) ? $context["symbol_left"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_symbol_left"]) ? $context["entry_symbol_left"] : null);
        echo "\" id=\"input-symbol-left\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-symbol-right\">";
        // line 55
        echo (isset($context["entry_symbol_right"]) ? $context["entry_symbol_right"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_right\" value=\"";
        // line 57
        echo (isset($context["symbol_right"]) ? $context["symbol_right"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_symbol_right"]) ? $context["entry_symbol_right"] : null);
        echo "\" id=\"input-symbol-right\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-decimal-place\">";
        // line 61
        echo (isset($context["entry_decimal_place"]) ? $context["entry_decimal_place"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"decimal_place\" value=\"";
        // line 63
        echo (isset($context["decimal_place"]) ? $context["decimal_place"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_decimal_place"]) ? $context["entry_decimal_place"] : null);
        echo "\" id=\"input-decimal-place\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-value\">";
        // line 67
        echo (isset($context["entry_value"]) ? $context["entry_value"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 69
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_value"]) ? $context["entry_value"] : null);
        echo "\" id=\"input-value\" class=\"form-control\"/>
              <small class=\"form-text text-muted\">";
        // line 70
        echo (isset($context["help_value"]) ? $context["help_value"] : null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 74
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 77
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 78
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 79
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 81
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 82
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 84
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 92
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "localisation/currency_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 92,  232 => 84,  227 => 82,  222 => 81,  217 => 79,  212 => 78,  210 => 77,  204 => 74,  197 => 70,  191 => 69,  186 => 67,  177 => 63,  172 => 61,  163 => 57,  158 => 55,  149 => 51,  144 => 49,  139 => 46,  133 => 44,  131 => 43,  127 => 42,  121 => 41,  116 => 39,  111 => 36,  105 => 34,  103 => 33,  97 => 32,  92 => 30,  87 => 28,  82 => 26,  76 => 24,  68 => 20,  66 => 19,  59 => 14,  48 => 12,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-currency" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-light"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <nav aria-label="breadcrumb">*/
/*         <ol class="breadcrumb">*/
/*           {% for breadcrumb in breadcrumbs %}*/
/*             <li class="breadcrumb-item"><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*           {% endfor %}*/
/*         </ol>*/
/*       </nav>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_iso }}</div>*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-pencil"></i> {{ text_form }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-title">{{ entry_title }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="title" value="{{ title }}" placeholder="{{ entry_title }}" id="input-title" class="form-control"/>*/
/*               {% if error_title %}*/
/*                 <div class="invalid-tooltip">{{ error_title }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-code">{{ entry_code }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="code" value="{{ code }}" placeholder="{{ entry_code }}" id="input-code" class="form-control"/>*/
/*               <small class="form-text text-muted">{{ help_code }}</small>*/
/*               {% if error_code %}*/
/*                 <div class="invalid-tooltip">{{ error_code }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 col-form-label" for="input-symbol-left">{{ entry_symbol_left }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="symbol_left" value="{{ symbol_left }}" placeholder="{{ entry_symbol_left }}" id="input-symbol-left" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 col-form-label" for="input-symbol-right">{{ entry_symbol_right }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="symbol_right" value="{{ symbol_right }}" placeholder="{{ entry_symbol_right }}" id="input-symbol-right" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 col-form-label" for="input-decimal-place">{{ entry_decimal_place }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="decimal_place" value="{{ decimal_place }}" placeholder="{{ entry_decimal_place }}" id="input-decimal-place" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 col-form-label" for="input-value">{{ entry_value }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="value" value="{{ value }}" placeholder="{{ entry_value }}" id="input-value" class="form-control"/>*/
/*               <small class="form-text text-muted">{{ help_value }}</small>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 col-form-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
