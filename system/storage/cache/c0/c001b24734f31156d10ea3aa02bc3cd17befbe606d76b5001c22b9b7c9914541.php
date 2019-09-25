<?php

/* catalog/product_list.twig */
class __TwigTemplate_44f43c114ee02a3fd26df1f0deb91c5635631ce71b26eb57140a1daa312a5a44 extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">

            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-category\">";
        // line 38
        echo (isset($context["column_category"]) ? $context["column_category"] : null);
        echo "</label>
                <select name=\"filter_category\" id=\"input-category\" class=\"form-control\" >
                    <option value=\"*\">";
        // line 40
        echo (isset($context["entry_all_categories"]) ? $context["entry_all_categories"] : null);
        echo "</option>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            echo "                        ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                // line 43
                echo "                            <option value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 45
                echo "                            <option value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"> ";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
                        ";
            }
            // line 47
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </select>
            </div>
            
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 52
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 53
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 56
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 57
        echo (isset($context["filter_model"]) ? $context["filter_model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
        // line 60
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 61
        echo (isset($context["filter_price"]) ? $context["filter_price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 64
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 65
        echo (isset($context["filter_quantity"]) ? $context["filter_quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 68
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                
                
                  
                

                  ";
        // line 77
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 78
            echo "
                
                
                  
                
                
                <option value=\"1\" selected=\"selected\">";
            // line 84
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 92
            echo "
                
                
                  
                
                
                <option value=\"1\">";
            // line 98
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 106
        echo "                  ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 107
            echo "
                
                
                  
                
                
                <option value=\"0\" selected=\"selected\">";
            // line 113
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 121
            echo "
                
                
                  
                
                
                <option value=\"0\">";
            // line 127
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 135
        echo "

              
              
                
              
              
              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 145
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 153
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 156
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\">";
        // line 162
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 163
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 164
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.model")) {
            echo " <a href=\"";
            echo (isset($context["sort_model"]) ? $context["sort_model"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_model"]) ? $context["sort_model"] : null);
            echo "\">";
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 165
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.price")) {
            echo " <a href=\"";
            echo (isset($context["sort_price"]) ? $context["sort_price"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_price"]) ? $context["sort_price"] : null);
            echo "\">";
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 166
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.quantity")) {
            echo " <a href=\"";
            echo (isset($context["sort_quantity"]) ? $context["sort_quantity"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_quantity"]) ? $context["sort_quantity"] : null);
            echo "\">";
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 167
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 168
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 173
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 174
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 175
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 176
                if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 177
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 179
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" />
                      ";
                }
                // line 180
                echo "</td>
                    <td class=\"text-center\">";
                // line 181
                if ($this->getAttribute($context["product"], "image", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 182
                echo $this->getAttribute($context["product"], "name", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 183
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 184
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span><br/>
                      <div class=\"text-danger\">";
                    // line 185
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</div>
                      ";
                } else {
                    // line 187
                    echo "                      ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
                      ";
                }
                // line 188
                echo "</td>
                    <td class=\"text-right\">";
                // line 189
                if (($this->getAttribute($context["product"], "quantity", array()) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</span> ";
                } elseif (($this->getAttribute($context["product"], "quantity", array()) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 190
                echo $this->getAttribute($context["product"], "status", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 191
                echo $this->getAttribute($context["product"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                  ";
        } else {
            // line 195
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 196
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 199
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 205
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 206
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}


            var filter_category = \$('select[name=\\'filter_category\\']').val();

            if (filter_category != '*') {
                url += '&filter_category=' + encodeURIComponent(filter_category);
            }
            
\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 254
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 266
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 286
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 303
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 303,  649 => 286,  626 => 266,  611 => 254,  560 => 206,  556 => 205,  548 => 199,  542 => 196,  539 => 195,  536 => 194,  525 => 191,  521 => 190,  505 => 189,  502 => 188,  496 => 187,  491 => 185,  485 => 184,  481 => 183,  477 => 182,  465 => 181,  462 => 180,  456 => 179,  450 => 177,  448 => 176,  445 => 175,  440 => 174,  438 => 173,  430 => 168,  412 => 167,  394 => 166,  376 => 165,  358 => 164,  340 => 163,  336 => 162,  327 => 156,  321 => 153,  310 => 145,  298 => 135,  287 => 127,  279 => 121,  268 => 113,  260 => 107,  257 => 106,  246 => 98,  238 => 92,  227 => 84,  219 => 78,  217 => 77,  205 => 68,  197 => 65,  193 => 64,  185 => 61,  181 => 60,  173 => 57,  169 => 56,  161 => 53,  157 => 52,  151 => 48,  145 => 47,  137 => 45,  129 => 43,  126 => 42,  122 => 41,  118 => 40,  113 => 38,  105 => 33,  99 => 29,  91 => 25,  88 => 24,  80 => 20,  78 => 19,  73 => 16,  62 => 14,  58 => 13,  53 => 11,  44 => 9,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-product').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="submit" form="form-product" formaction="{{ copy }}" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-copy"></i></button>*/
/*         <button type="button" form="form-product" formaction="{{ delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-product').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-product" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/* */
/*             <div class="form-group">*/
/*                 <label class="control-label" for="input-category">{{ column_category }}</label>*/
/*                 <select name="filter_category" id="input-category" class="form-control" >*/
/*                     <option value="*">{{entry_all_categories}}</option>*/
/*                     {% for category in categories %}*/
/*                         {% if category.category_id == filter_category %}*/
/*                             <option value="{{ category.category_id }}" selected="selected">{{ category.name }}</option>*/
/*                         {% else %}*/
/*                             <option value="{{ category.category_id }}"> {{ category.name }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*             */
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-model">{{ entry_model }}</label>*/
/*               <input type="text" name="filter_model" value="{{ filter_model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-price">{{ entry_price }}</label>*/
/*               <input type="text" name="filter_price" value="{{ filter_price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*               <input type="text" name="filter_quantity" value="{{ filter_quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 */
/*                 */
/*                 */
/*                   */
/*                 */
/* */
/*                   {% if filter_status == '1' %}*/
/* */
/*                 */
/*                 */
/*                   */
/*                 */
/*                 */
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 */
/*                 */
/*                 */
/*                   */
/*                 */
/* */
/*                   {% else %}*/
/* */
/*                 */
/*                 */
/*                   */
/*                 */
/*                 */
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 */
/*                 */
/*                 */
/*                   */
/*                 */
/* */
/*                   {% endif %}*/
/*                   {% if filter_status == '0' %}*/
/* */
/*                 */
/*                 */
/*                   */
/*                 */
/*                 */
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 */
/*                 */
/*                 */
/*                   */
/*                 */
/* */
/*                   {% else %}*/
/* */
/*                 */
/*                 */
/*                   */
/*                 */
/*                 */
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 */
/*                 */
/*                 */
/*                   */
/*                 */
/* */
/*                   {% endif %}*/
/* */
/* */
/*               */
/*               */
/*                 */
/*               */
/*               */
/*               </select>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-product">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-center">{{ column_image }}</td>*/
/*                       <td class="text-left">{% if sort == 'pd.name' %} <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a> {% else %} <a href="{{ sort_name }}">{{ column_name }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'p.model' %} <a href="{{ sort_model }}" class="{{ order|lower }}">{{ column_model }}</a> {% else %} <a href="{{ sort_model }}">{{ column_model }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{% if sort == 'p.price' %} <a href="{{ sort_price }}" class="{{ order|lower }}">{{ column_price }}</a> {% else %} <a href="{{ sort_price }}">{{ column_price }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{% if sort == 'p.quantity' %} <a href="{{ sort_quantity }}" class="{{ order|lower }}">{{ column_quantity }}</a> {% else %} <a href="{{ sort_quantity }}">{{ column_quantity }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'p.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% if products %}*/
/*                   {% for product in products %}*/
/*                   <tr>*/
/*                     <td class="text-center">{% if product.product_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ product.product_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ product.product_id }}" />*/
/*                       {% endif %}</td>*/
/*                     <td class="text-center">{% if product.image %} <img src="{{ product.image }}" alt="{{ product.name }}" class="img-thumbnail" /> {% else %} <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span> {% endif %}</td>*/
/*                     <td class="text-left">{{ product.name }}</td>*/
/*                     <td class="text-left">{{ product.model }}</td>*/
/*                     <td class="text-right">{% if product.special %} <span style="text-decoration: line-through;">{{ product.price }}</span><br/>*/
/*                       <div class="text-danger">{{ product.special }}</div>*/
/*                       {% else %}*/
/*                       {{ product.price }}*/
/*                       {% endif %}</td>*/
/*                     <td class="text-right">{% if product.quantity <= 0 %} <span class="label label-warning">{{ product.quantity }}</span> {% elseif product.quantity <= 5 %} <span class="label label-danger">{{ product.quantity }}</span> {% else %} <span class="label label-success">{{ product.quantity }}</span> {% endif %}</td>*/
/*                     <td class="text-left">{{ product.status }}</td>*/
/*                     <td class="text-right"><a href="{{ product.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = '';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_model = $('input[name=\'filter_model\']').val();*/
/* */
/* 	if (filter_model) {*/
/* 		url += '&filter_model=' + encodeURIComponent(filter_model);*/
/* 	}*/
/* */
/* 	var filter_price = $('input[name=\'filter_price\']').val();*/
/* */
/* 	if (filter_price) {*/
/* 		url += '&filter_price=' + encodeURIComponent(filter_price);*/
/* 	}*/
/* */
/* */
/*             var filter_category = $('select[name=\'filter_category\']').val();*/
/* */
/*             if (filter_category != '*') {*/
/*                 url += '&filter_category=' + encodeURIComponent(filter_category);*/
/*             }*/
/*             */
/* 	var filter_quantity = $('input[name=\'filter_quantity\']').val();*/
/* */
/* 	if (filter_quantity) {*/
/* 		url += '&filter_quantity=' + encodeURIComponent(filter_quantity);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/* 	if (filter_status !== '') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* */
/* 	location = 'index.php?route=catalog/product&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* // IE and Edge fix!*/
/* $('button[form=\'form-product\']').on('click', function(e) {*/
/* 	$('#form-product').attr('action', $(this).attr('formaction'));*/
/* });*/
/*   */
/* $('input[name=\'filter_name\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_name\']').val(item['label']);*/
/* 	}*/
/* });*/
/* */
/* $('input[name=\'filter_model\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_model=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['model'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_model\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script></div>*/
/* {{ footer }} */
