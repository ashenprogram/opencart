<?php

/* simplica/template/product/product.twig */
class __TwigTemplate_48b5d642dd985f33b875b6b73884ae73f055adce6f93c0bf1e7b17a4c87dcfaf extends Twig_Template
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
        echo "
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\"> ";
        // line 17
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> ";
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 23
            echo "          <ul class=\"thumbnails\">
            ";
            // line 24
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 25
                echo "            <li><a class=\"thumbnail\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a></li>
            ";
            }
            // line 27
            echo "            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 28
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 29
                    echo "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            ";
            }
            // line 32
            echo "          </ul>
          ";
        }
        // line 34
        echo "        </div>
        ";
        // line 35
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 36
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 37
            echo "        ";
        } else {
            // line 38
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 39
            echo "        ";
        }
        // line 40
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          
          <h1>";
        // line 42
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 44
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 45
            echo "            <li>";
            echo (isset($context["text_brand"]) ? $context["text_brand"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
            ";
        }
        // line 47
        echo "            <li class=\"optionmodel\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"changemodel\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
            ";
        // line 48
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 49
            echo "            <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
            ";
        }
        // line 51
        echo "            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
          </ul>
          ";
        // line 53
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 54
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 55
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 56
                echo "            <li>
              <h2 class=\"price\">";
                // line 57
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 60
                echo "            <li><span style=\"text-decoration: line-through;\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
            <li>
              <h2 class=\"price\">";
                // line 62
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h2>
            </li>
            ";
            }
            // line 65
            echo "            ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 66
                echo "            <li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
            ";
            }
            // line 68
            echo "            ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 69
                echo "            <li>";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 71
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 72
                echo "            <li>
              <hr>
            </li>
            ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 76
                    echo "            <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "            ";
            }
            // line 79
            echo "          </ul>
          ";
        }
        // line 81
        echo "          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 82
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 83
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
          <div id=\"product\"> ";
        // line 85
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 86
            echo "            <hr>
            <h3>";
            // line 87
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 89
                echo "
\t\t\t";
                // line 90
                if ((($this->getAttribute($context["option"], "type", array(), "array") == "color") && (isset($context["module_eb_color_size_option_status"]) ? $context["module_eb_color_size_option_status"] : null))) {
                    // line 91
                    echo "<style type=\"text/css\">
\t.colorboxtext {
\t\twidth:60px; 
\t\theight:60px; 
\t\tpadding:16px 0px 0px 15px; 
\t\tborder:1px solid #000000; 
\t\tbackground-color:#f4f4f4;
\t\tfont-family:'Microsoft JhengHei';
\t\tfont-size:1.25em; 
\t\ttext-align:center; 
\t\tcursor:pointer; 
\t}
\t.active .colorboxtext {
\t    border: 2px solid #f60;
\t}
</style>
\t\t\t<div id=\"productoptioncolor\" class=\"form-group ";
                    // line 107
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 108
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
              <div id=\"input-option";
                    // line 109
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">
                ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 111
                        echo "\t\t\t\t
\t\t\t\t";
                        // line 112
                        if ((((isset($context["module_eb_color_size_option_bullet_type"]) ? $context["module_eb_color_size_option_bullet_type"] : null) == 2) && $this->getAttribute($context["option_value"], "colorimage", array(), "array"))) {
                            // line 113
                            echo "\t\t\t\t<div data-toggle=\"tooltip\" class=\"colorbx\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array(), "array");
                            echo " ";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array(), "array");
                            echo $this->getAttribute($context["option_value"], "price", array(), "array");
                            echo "\">
                  <label rel=\"";
                            // line 114
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                            echo "\" data-value=\"";
                            echo $this->getAttribute($context["option"], "option_id", array(), "array");
                            echo "\" id=\"colorboxbtnx";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                            echo "\" class=\"colorboxbtn\" style=\"background-image: url(";
                            echo $this->getAttribute($context["option_value"], "colorimage", array(), "array");
                            echo ")\">
                    <input style=\"opacity:0\" type=\"radio\" name=\"option[";
                            // line 115
                            echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                            echo "\" />
                  </label>
                </div>
\t\t\t\t ";
                        } else {
                            // line 119
                            echo "                <div data-toggle=\"tooltip\" class=\"colorbx\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array(), "array");
                            echo " ";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array(), "array");
                            echo $this->getAttribute($context["option_value"], "price", array(), "array");
                            echo "\">
                  <label rel=\"";
                            // line 120
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                            echo "\" data-value=\"";
                            echo $this->getAttribute($context["option"], "option_id", array(), "array");
                            echo "\" id=\"colorboxbtnx";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                            echo "\" class=\"colorboxtext\"> ";
                            echo $this->getAttribute($context["option_value"], "name", array(), "array");
                            echo "
                    <input style=\"opacity:0\" type=\"radio\" name=\"option[";
                            // line 121
                            echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                            echo "\" />
                  </label>
                </div>
\t\t\t\t";
                        }
                        // line 125
                        echo "               ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    echo "              </div>
            </div>
\t\t\t<style>
\t\t\t\t#productoptioncolor{
\t\t\t\t\tfloat: left;
\t\t\t\t\twidth: 100%;
\t\t\t\t}
\t\t\t    .colorbx{
\t\t\t\t\tfloat: left;
\t\t\t\t\tmargin: 2px;
\t\t\t\t}
\t\t\t\t.colorboxbtn{
\t\t\t\t\tbackground:#000;
\t\t\t\t\theight:";
                    // line 139
                    echo (isset($context["module_eb_color_size_option_bullet_width"]) ? $context["module_eb_color_size_option_bullet_width"] : null);
                    echo "px;
\t\t\t\t\twidth:";
                    // line 140
                    echo (isset($context["module_eb_color_size_option_bullet_height"]) ? $context["module_eb_color_size_option_bullet_height"] : null);
                    echo "px;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\t";
                    // line 142
                    if (((isset($context["module_eb_color_size_option_bullet_style"]) ? $context["module_eb_color_size_option_bullet_style"] : null) == 1)) {
                        // line 143
                        echo "\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\t";
                    }
                    // line 145
                    echo "\t\t\t\t\tborder: 1px solid;
\t\t\t\t}
\t\t\t\t.colorboxbtn input{
\t\t\t\t\tcursor: pointer;
\t\t\t\t}
\t\t\t\t.active .colorboxbtn{
\t\t\t\t  border: 2px solid #f60;
\t\t\t\t}
\t\t\t</style>
\t\t\t<div id=\"sizedata\"></div>
\t\t\t";
                }
                // line 156
                echo "
<style>
    .inputGroup input[type=\"radio\"] {
        display: none;
    }
    .inputGroup input[type=\"radio\"] + label {
        box-sizing: border-box;
        display: inline-block;
        font-size: 0.8em;
        line-height: 1.2;
        min-width: 46px;
        padding: 10px 12px;
        text-align: center;
        border: 1px solid #d4d9de;
        border-radius: 2px;
        color: #4a4e5c;
        float: left;
        margin: 8px 8px 0 0;
        cursor: pointer;
    }
    .inputGroup input[type=\"radio\"]:checked + label {
        border: 2px solid #f60;
        color: #f60;
    }
    .inputGroup .outstock {
        box-sizing: border-box;
        display: inline-block;
        font-size: 0.8em;
        line-height: 1.2;
        min-width: 46px;
        padding: 10px 12px;
        text-align: center;
        border-radius: 2px;
        float: left;
        margin: 8px 8px 0 0;

        border: 1px solid #ccc;
        background-color: #f0f0f0;
        color: #aaa;
        text-decoration: line-through;
        cursor: default;
    }
</style>
\t\t\t
            ";
                // line 200
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 201
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 202
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 203
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 204
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 205
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 206
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 207
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 208
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 209
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "              </select>
            </div>
            ";
                }
                // line 214
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 215
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 216
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 217
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 218
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 220
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 221
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 222
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 223
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 224
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 225
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    echo " </div>
            </div>
            ";
                }
                // line 230
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 231
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 232
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 233
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 234
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 236
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 237
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 238
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 239
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 240
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 241
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 243
                    echo " </div>
            </div>
            ";
                }
                // line 246
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 247
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 248
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 249
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 252
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 253
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 254
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 255
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 258
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 259
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 260
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 261
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 262
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 265
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 266
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 267
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 269
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 275
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 276
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 277
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 279
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 285
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 286
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 287
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 289
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 295
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "            ";
        }
        // line 297
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 298
            echo "            <hr>
            <h3>";
            // line 299
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 302
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 304
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 310
        echo "
                <div class=\"alert alert-info\">
                    各地門市地址及電話 :<br>
                    台北市 : <br>
                    信義區天龍路SSS號<br>
                    (電話 : 02-8888-SSSS) (10:30-21:30)<br><br>

                    台中市 : <br>
                    西區天龍路SSS號<br>
                    (電話 : 04-8888-SSSS) (10:30-22:00)<br><br>

                    台南市 : <br>
                    安平區天龍路SSS號<br>
                    (電話 : 06-888-SSSS) (10:30-21:30)<br><br>

                    高雄市 : <br>
                    鳳山區天龍路SSS號<br>
                    (電話 : 07-888-SSSS) (10:30-22:00)
                </div>
            </div>
          ";
        // line 330
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 331
            echo "          <div class=\"rating\">
            <p>";
            // line 332
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 333
                echo "              ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 334
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 337
            echo (isset($context["share"]) ? $context["share"] : null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          ";
        }
        // line 342
        echo "        </div>
      </div>



      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 348
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
        ";
        // line 349
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 350
            echo "        <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
        ";
        }
        // line 352
        echo "        ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 353
            echo "        <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
        ";
        }
        // line 355
        echo "      </ul>

      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 360
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 361
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 362
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 364
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 365
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 367
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 372
                    echo "                <tr>
                  <td>";
                    // line 373
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 374
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 377
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            echo "              </table>
            </div>
            ";
        }
        // line 382
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 383
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 386
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                ";
            // line 387
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 388
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 390
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 391
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 396
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 398
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 403
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 404
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 414
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 416
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 419
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 423
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 425
            echo "              </form>
            </div>
            ";
        }
        // line 428
        echo "          </div>          
        </div>
      </div>

      ";
        // line 432
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 433
            echo "      <h3>";
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 434
            $context["i"] = 0;
            // line 435
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 436
                echo "        ";
                if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 437
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 438
                    echo "        ";
                } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 439
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 440
                    echo "        ";
                } else {
                    // line 441
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 442
                    echo "        ";
                }
                // line 443
                echo "        <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 445
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 447
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
              <p>";
                // line 448
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
              ";
                // line 449
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 450
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 451
                        echo "                ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 452
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 454
                echo "              ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 455
                    echo "              <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 456
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                ";
                    } else {
                        // line 457
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 458
                    echo "                ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 459
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\"><i class=\"fa fa-phone\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">來電洽詢</span></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 462
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 463
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 467
                if ((((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null)) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 2) == 0))) {
                    // line 468
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 469
(isset($context["column_left"]) ? $context["column_left"] : null) || ((isset($context["column_right"]) ? $context["column_right"] : null) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 3) == 0)))) {
                    // line 470
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 471
(isset($context["i"]) ? $context["i"] : null) + 1) % 4) == 0)) {
                    // line 472
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 474
                echo "        ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 475
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 477
        echo "        ";
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 478
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
        ";
            // line 479
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 480
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
        ";
                } else {
                    // line 481
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 482
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 484
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 485
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 563
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 568
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 574
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 641
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 645
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 

<script type=\"text/javascript\"><!--
\$(document).on('click', '.number-spinner button', function () {    
  var btn = \$(this),
    oldValue = btn.closest('.number-spinner').find('input').val().trim(),
    newVal = 1;
      
  if (btn.attr('data-dir') == 'up') {
    newVal = parseInt(oldValue) + 1;
  } else {
    if (oldValue > 1) {
      newVal = parseInt(oldValue) - 1;
    } else {
      newVal = 1;
    }
  }
  btn.closest('.number-spinner').find('input').val(newVal);
});
//--></script>

\t\t\t\t\t";
        // line 703
        if ((isset($context["module_eb_color_size_option_status"]) ? $context["module_eb_color_size_option_status"] : null)) {
            // line 704
            echo "\t\t\t\t\t<script>
\t\t\t\t\t  \$('#productoptioncolor label[id^=\\'colorboxbtnx\\']').on('click', function() {
\t\t\t\t\t\t\tvar product_option_value_id = \$(this).attr('rel');
\t\t\t\t\t\t\tvar option_id = \$(this).attr('data-value');
\t\t\t\t\t\t\t\$('.colorbx').removeClass('active');
\t\t\t\t\t\t\t\$(this).parent('.colorbx').addClass('active');
\t\t\t\t\t\t\t \$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/optioncolorsize/optioncolorsize&product_id=";
            // line 711
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "&product_option_value_id='+product_option_value_id+'&option_id='+option_id,
\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\tdataType: 'json',                   
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\tif (json['html']) {
\t\t\t\t\t\t\t\t\t\t\$('.tooltip').remove();
\t\t\t\t\t\t\t\t\t\t";
            // line 717
            if ((isset($context["module_eb_color_size_option_swap_addtional_image"]) ? $context["module_eb_color_size_option_swap_addtional_image"] : null)) {
                // line 718
                echo "\t\t\t\t\t\t\t\t\t\t\t\$('.thumbnails').html(json['html']);
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 720
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["module_eb_color_size_option_swap_image"]) ? $context["module_eb_color_size_option_swap_image"] : null)) {
                    // line 721
                    echo "\t\t\t\t\t\t\t\t\t\t \$('.thumbnails li').not('.image-additional').html(json['html']);
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 723
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 724
            echo "\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tif(json['sizedata']){
\t\t\t\t\t\t\t\t\t\t\$('#sizedata').html(json['sizedata']);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('.oplx').remove();
\t\t\t\t\t\t\t\t\tif(json['model']){
\t\t\t\t\t\t\t\t\t\t\$('.changemodel').text(json['model']);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t });
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 741
            if ((isset($context["module_eb_color_size_option_auto_trigger"]) ? $context["module_eb_color_size_option_auto_trigger"] : null)) {
                // line 742
                echo "\t\t\t\t\t\t\$('#productoptioncolor div div:first-child label').trigger('click');
\t\t\t\t\t\t";
            }
            // line 744
            echo "\t\t\t\t\t</script>
\t\t\t\t\t<script>
\t\t\t\t\t\$('#product').delegate('input[name=\"option[size]\"]', 'change', function(e) {
\t\t\t\t\t\tgetsizevalues(\$(this).val());
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$('#product').delegate('select[name=\"option[size]\"]', 'change', function(e) {
\t\t\t\t\t\tgetsizevalues(\$(this).val());
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tfunction getsizevalues(values){
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=extension/optioncolorsize/optioncolorsize/getsizevalues&product_id=";
            // line 756
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "&values='+values,
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\tdataType: 'json',                   
\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\$('.oplx').remove();
\t\t\t\t\t\t\t\tif(json['model']){
\t\t\t\t\t\t\t\t\t\$('.changemodel').text(json['model']);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\thtml = '';
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(json['sku']){
\t\t\t\t\t\t\t\t\thtml += '<li class=\"oplx\">";
            // line 768
            echo (isset($context["text_sku_c"]) ? $context["text_sku_c"] : null);
            echo " '+json['sku']+'</li>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(json['upc']){
\t\t\t\t\t\t\t\t\thtml += '<li class=\"oplx\">";
            // line 772
            echo (isset($context["text_upc_c"]) ? $context["text_upc_c"] : null);
            echo " '+json['upc']+'</li>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(json['ean']){
\t\t\t\t\t\t\t\t  html += '<li class=\"oplx\">";
            // line 776
            echo (isset($context["text_ean_c"]) ? $context["text_ean_c"] : null);
            echo " '+json['ean']+'</li>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(json['jan']){
\t\t\t\t\t\t\t\t   html += '<li class=\"oplx\">";
            // line 780
            echo (isset($context["text_jan_c"]) ? $context["text_jan_c"] : null);
            echo " '+json['jan']+'</li>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif(html){
\t\t\t\t\t\t\t\t\t\$('.optionmodel').after(html);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t  ";
        }
        // line 794
        echo "\t\t\t
";
        // line 795
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "simplica/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1763 => 795,  1760 => 794,  1743 => 780,  1736 => 776,  1729 => 772,  1722 => 768,  1707 => 756,  1693 => 744,  1689 => 742,  1687 => 741,  1668 => 724,  1665 => 723,  1661 => 721,  1658 => 720,  1654 => 718,  1652 => 717,  1643 => 711,  1634 => 704,  1632 => 703,  1571 => 645,  1564 => 641,  1494 => 574,  1485 => 568,  1477 => 563,  1396 => 485,  1391 => 484,  1382 => 482,  1375 => 481,  1365 => 480,  1361 => 479,  1356 => 478,  1353 => 477,  1344 => 475,  1341 => 474,  1337 => 472,  1335 => 471,  1332 => 470,  1330 => 469,  1327 => 468,  1325 => 467,  1316 => 463,  1310 => 462,  1305 => 459,  1293 => 458,  1286 => 457,  1280 => 456,  1277 => 455,  1274 => 454,  1265 => 452,  1258 => 451,  1253 => 450,  1251 => 449,  1247 => 448,  1241 => 447,  1230 => 445,  1224 => 443,  1221 => 442,  1218 => 441,  1215 => 440,  1212 => 439,  1209 => 438,  1206 => 437,  1203 => 436,  1198 => 435,  1196 => 434,  1191 => 433,  1189 => 432,  1183 => 428,  1178 => 425,  1172 => 423,  1163 => 419,  1157 => 416,  1152 => 414,  1139 => 404,  1135 => 403,  1127 => 398,  1122 => 396,  1114 => 391,  1110 => 390,  1106 => 388,  1104 => 387,  1100 => 386,  1095 => 383,  1092 => 382,  1087 => 379,  1080 => 377,  1071 => 374,  1067 => 373,  1064 => 372,  1060 => 371,  1053 => 367,  1049 => 365,  1045 => 364,  1041 => 362,  1039 => 361,  1035 => 360,  1028 => 355,  1022 => 353,  1019 => 352,  1013 => 350,  1011 => 349,  1007 => 348,  999 => 342,  991 => 337,  977 => 334,  970 => 333,  966 => 332,  963 => 331,  961 => 330,  939 => 310,  933 => 306,  922 => 304,  918 => 303,  914 => 302,  908 => 299,  905 => 298,  902 => 297,  899 => 296,  893 => 295,  880 => 289,  873 => 287,  866 => 286,  863 => 285,  850 => 279,  843 => 277,  836 => 276,  833 => 275,  820 => 269,  813 => 267,  806 => 266,  803 => 265,  795 => 262,  787 => 261,  783 => 260,  776 => 259,  773 => 258,  761 => 255,  755 => 254,  748 => 253,  745 => 252,  733 => 249,  727 => 248,  720 => 247,  717 => 246,  712 => 243,  704 => 241,  697 => 240,  695 => 239,  690 => 238,  674 => 237,  668 => 236,  664 => 234,  658 => 233,  654 => 232,  647 => 231,  644 => 230,  639 => 227,  631 => 225,  624 => 224,  622 => 223,  618 => 222,  600 => 221,  594 => 220,  590 => 218,  584 => 217,  580 => 216,  573 => 215,  570 => 214,  565 => 211,  558 => 209,  551 => 208,  549 => 207,  542 => 206,  538 => 205,  534 => 204,  528 => 203,  522 => 202,  515 => 201,  513 => 200,  467 => 156,  454 => 145,  450 => 143,  448 => 142,  443 => 140,  439 => 139,  424 => 126,  418 => 125,  409 => 121,  399 => 120,  391 => 119,  382 => 115,  372 => 114,  364 => 113,  362 => 112,  359 => 111,  355 => 110,  351 => 109,  347 => 108,  341 => 107,  323 => 91,  321 => 90,  318 => 89,  314 => 88,  310 => 87,  307 => 86,  305 => 85,  298 => 83,  292 => 82,  289 => 81,  285 => 79,  282 => 78,  271 => 76,  267 => 75,  262 => 72,  259 => 71,  251 => 69,  248 => 68,  240 => 66,  237 => 65,  231 => 62,  225 => 60,  219 => 57,  216 => 56,  214 => 55,  211 => 54,  209 => 53,  201 => 51,  193 => 49,  191 => 48,  184 => 47,  174 => 45,  172 => 44,  167 => 42,  161 => 40,  158 => 39,  155 => 38,  152 => 37,  149 => 36,  147 => 35,  144 => 34,  140 => 32,  137 => 31,  120 => 29,  115 => 28,  112 => 27,  98 => 25,  96 => 24,  93 => 23,  88 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row"> {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}"> {% if thumb or images %}*/
/*           <ul class="thumbnails">*/
/*             {% if thumb %}*/
/*             <li><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*             {% endif %}*/
/*             {% if images %}*/
/*             {% for image in images %}*/
/*             <li class="image-additional"><a class="thumbnail" href="{{ image.popup }}" title="{{ heading_title }}"> <img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           */
/*           <h1>{{ heading_title }}</h1>*/
/*           <ul class="list-unstyled">*/
/*             {% if manufacturer %}*/
/*             <li>{{ text_brand }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li class="optionmodel">{{ text_model }} <span class="changemodel">{{ model }}</span></li>*/
/*             {% if reward %}*/
/*             <li>{{ text_reward }} {{ reward }}</li>*/
/*             {% endif %}*/
/*             <li>{{ text_stock }} {{ stock }}</li>*/
/*           </ul>*/
/*           {% if price %}*/
/*           <ul class="list-unstyled">*/
/*             {% if not special %}*/
/*             <li>*/
/*               <h2 class="price">{{ price }}</h2>*/
/*             </li>*/
/*             {% else %}*/
/*             <li><span style="text-decoration: line-through;">{{ price }}</span></li>*/
/*             <li>*/
/*               <h2 class="price">{{ special }}</h2>*/
/*             </li>*/
/*             {% endif %}*/
/*             {% if tax %}*/
/*             <li>{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li>{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*             <li>*/
/*               <hr>*/
/*             </li>*/
/*             {% for discount in discounts %}*/
/*             <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <div class="btn-group">*/
/*             <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i></button>*/
/*             <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*           </div>*/
/*           <div id="product"> {% if options %}*/
/*             <hr>*/
/*             <h3>{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/* */
/* 			{% if option['type'] == 'color' and module_eb_color_size_option_status %}*/
/* <style type="text/css">*/
/* 	.colorboxtext {*/
/* 		width:60px; */
/* 		height:60px; */
/* 		padding:16px 0px 0px 15px; */
/* 		border:1px solid #000000; */
/* 		background-color:#f4f4f4;*/
/* 		font-family:'Microsoft JhengHei';*/
/* 		font-size:1.25em; */
/* 		text-align:center; */
/* 		cursor:pointer; */
/* 	}*/
/* 	.active .colorboxtext {*/
/* 	    border: 2px solid #f60;*/
/* 	}*/
/* </style>*/
/* 			<div id="productoptioncolor" class="form-group {% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option['name'] }}</label>*/
/*               <div id="input-option{{ option['product_option_id'] }}">*/
/*                 {% for option_value in option.product_option_value %}*/
/* 				*/
/* 				{% if module_eb_color_size_option_bullet_type==2 and option_value['colorimage'] %}*/
/* 				<div data-toggle="tooltip" class="colorbx" title="{{ option_value['name'] }} {{ option_value['price_prefix'] }}{{ option_value['price'] }}">*/
/*                   <label rel="{{ option_value['product_option_value_id'] }}" data-value="{{ option['option_id'] }}" id="colorboxbtnx{{ option_value['product_option_value_id'] }}" class="colorboxbtn" style="background-image: url({{ option_value['colorimage'] }})">*/
/*                     <input style="opacity:0" type="radio" name="option[{{ option['product_option_id'] }}]" value="{{ option_value['product_option_value_id'] }}" />*/
/*                   </label>*/
/*                 </div>*/
/* 				 {% else %}*/
/*                 <div data-toggle="tooltip" class="colorbx" title="{{ option_value['name'] }} {{ option_value['price_prefix'] }}{{ option_value['price'] }}">*/
/*                   <label rel="{{ option_value['product_option_value_id'] }}" data-value="{{ option['option_id'] }}" id="colorboxbtnx{{ option_value['product_option_value_id'] }}" class="colorboxtext"> {{ option_value['name'] }}*/
/*                     <input style="opacity:0" type="radio" name="option[{{ option['product_option_id'] }}]" value="{{ option_value['product_option_value_id'] }}" />*/
/*                   </label>*/
/*                 </div>*/
/* 				{% endif %}*/
/*                {% endfor %}*/
/*               </div>*/
/*             </div>*/
/* 			<style>*/
/* 				#productoptioncolor{*/
/* 					float: left;*/
/* 					width: 100%;*/
/* 				}*/
/* 			    .colorbx{*/
/* 					float: left;*/
/* 					margin: 2px;*/
/* 				}*/
/* 				.colorboxbtn{*/
/* 					background:#000;*/
/* 					height:{{ module_eb_color_size_option_bullet_width }}px;*/
/* 					width:{{ module_eb_color_size_option_bullet_height }}px;*/
/* 					cursor: pointer;*/
/* 					{% if module_eb_color_size_option_bullet_style==1 %}*/
/* 					border-radius: 50%;*/
/* 					{% endif %}*/
/* 					border: 1px solid;*/
/* 				}*/
/* 				.colorboxbtn input{*/
/* 					cursor: pointer;*/
/* 				}*/
/* 				.active .colorboxbtn{*/
/* 				  border: 2px solid #f60;*/
/* 				}*/
/* 			</style>*/
/* 			<div id="sizedata"></div>*/
/* 			{% endif %}*/
/* */
/* <style>*/
/*     .inputGroup input[type="radio"] {*/
/*         display: none;*/
/*     }*/
/*     .inputGroup input[type="radio"] + label {*/
/*         box-sizing: border-box;*/
/*         display: inline-block;*/
/*         font-size: 0.8em;*/
/*         line-height: 1.2;*/
/*         min-width: 46px;*/
/*         padding: 10px 12px;*/
/*         text-align: center;*/
/*         border: 1px solid #d4d9de;*/
/*         border-radius: 2px;*/
/*         color: #4a4e5c;*/
/*         float: left;*/
/*         margin: 8px 8px 0 0;*/
/*         cursor: pointer;*/
/*     }*/
/*     .inputGroup input[type="radio"]:checked + label {*/
/*         border: 2px solid #f60;*/
/*         color: #f60;*/
/*     }*/
/*     .inputGroup .outstock {*/
/*         box-sizing: border-box;*/
/*         display: inline-block;*/
/*         font-size: 0.8em;*/
/*         line-height: 1.2;*/
/*         min-width: 46px;*/
/*         padding: 10px 12px;*/
/*         text-align: center;*/
/*         border-radius: 2px;*/
/*         float: left;*/
/*         margin: 8px 8px 0 0;*/
/* */
/*         border: 1px solid #ccc;*/
/*         background-color: #f0f0f0;*/
/*         color: #aaa;*/
/*         text-decoration: line-through;*/
/*         cursor: default;*/
/*     }*/
/* </style>*/
/* 			*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*                 <div class="alert alert-info">*/
/*                     各地門市地址及電話 :<br>*/
/*                     台北市 : <br>*/
/*                     信義區天龍路SSS號<br>*/
/*                     (電話 : 02-8888-SSSS) (10:30-21:30)<br><br>*/
/* */
/*                     台中市 : <br>*/
/*                     西區天龍路SSS號<br>*/
/*                     (電話 : 04-8888-SSSS) (10:30-22:00)<br><br>*/
/* */
/*                     台南市 : <br>*/
/*                     安平區天龍路SSS號<br>*/
/*                     (電話 : 06-888-SSSS) (10:30-21:30)<br><br>*/
/* */
/*                     高雄市 : <br>*/
/*                     鳳山區天龍路SSS號<br>*/
/*                     (電話 : 07-888-SSSS) (10:30-22:00)*/
/*                 </div>*/
/*             </div>*/
/*           {% if review_status %}*/
/*           <div class="rating">*/
/*             <p>{% for i in 1..5 %}*/
/*               {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*               {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*             <hr>*/
/*             <!-- AddThis Button BEGIN -->*/
/*             <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/*             <!-- AddThis Button END --> */
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/* */
/* */
/* */
/*       <ul class="nav nav-tabs">*/
/*         <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*         {% if attribute_groups %}*/
/*         <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*         {% endif %}*/
/*         {% if review_status %}*/
/*         <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/* */
/*       <div class="row">*/
/*         <div class="col-sm-12">*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2>{{ text_write }}</h2>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>          */
/*         </div>*/
/*       </div>*/
/* */
/*       {% if products %}*/
/*       <h3>{{ text_related }}</h3>*/
/*       <div class="row"> {% set i = 0 %}*/
/*         {% for product in products %}*/
/*         {% if column_left and column_right %}*/
/*         {% set class = 'col-xs-8 col-sm-6' %}*/
/*         {% elseif column_left or column_right %}*/
/*         {% set class = 'col-xs-6 col-md-4' %}*/
/*         {% else %}*/
/*         {% set class = 'col-xs-6 col-sm-3' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           <div class="product-thumb transition">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div class="caption">*/
/*               <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*               <p>{{ product.description }}</p>*/
/*               {% if product.rating %}*/
/*               <div class="rating"> {% for j in 1..5 %}*/
/*                 {% if product.rating < j %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> {% endif %}*/
/*                 {% endfor %} </div>*/
/*               {% endif %}*/
/*               {% if product.price %}*/
/*               <p class="price"> {% if not product.special %}*/
/*                 {{ product.price }}*/
/*                 {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                 {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*               {% endif %} </div>*/
/*             <div class="button-group">*/
/*               <button type="button"><i class="fa fa-phone"></i> <span class="hidden-xs hidden-sm hidden-md">來電洽詢</span></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*               <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% if column_left and column_right and (i + 1) % 2 == 0 %}*/
/*         <div class="clearfix visible-md visible-sm"></div>*/
/*         {% elseif column_left or column_right and (i + 1) % 3 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% elseif (i + 1) % 4 == 0 %}*/
/*         <div class="clearfix visible-md"></div>*/
/*         {% endif %}*/
/*         {% set i = i + 1 %}*/
/*         {% endfor %} </div>*/
/*         {% endif %}*/
/*         {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*         {% for i in 0..tags|length %}*/
/*         {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*         {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*         {% endfor %} </p>*/
/*         {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* */
/* <script type="text/javascript"><!--*/
/* $(document).on('click', '.number-spinner button', function () {    */
/*   var btn = $(this),*/
/*     oldValue = btn.closest('.number-spinner').find('input').val().trim(),*/
/*     newVal = 1;*/
/*       */
/*   if (btn.attr('data-dir') == 'up') {*/
/*     newVal = parseInt(oldValue) + 1;*/
/*   } else {*/
/*     if (oldValue > 1) {*/
/*       newVal = parseInt(oldValue) - 1;*/
/*     } else {*/
/*       newVal = 1;*/
/*     }*/
/*   }*/
/*   btn.closest('.number-spinner').find('input').val(newVal);*/
/* });*/
/* //--></script>*/
/* */
/* 					{% if module_eb_color_size_option_status  %}*/
/* 					<script>*/
/* 					  $('#productoptioncolor label[id^=\'colorboxbtnx\']').on('click', function() {*/
/* 							var product_option_value_id = $(this).attr('rel');*/
/* 							var option_id = $(this).attr('data-value');*/
/* 							$('.colorbx').removeClass('active');*/
/* 							$(this).parent('.colorbx').addClass('active');*/
/* 							 $.ajax({*/
/* 								url: 'index.php?route=extension/optioncolorsize/optioncolorsize&product_id={{ product_id }}&product_option_value_id='+product_option_value_id+'&option_id='+option_id,*/
/* 								type: 'post',*/
/* 								dataType: 'json',                   */
/* 								success: function(json) {*/
/* 									if (json['html']) {*/
/* 										$('.tooltip').remove();*/
/* 										{% if module_eb_color_size_option_swap_addtional_image  %}*/
/* 											$('.thumbnails').html(json['html']);*/
/* 										{% else %}*/
/* 										{% if module_eb_color_size_option_swap_image  %}*/
/* 										 $('.thumbnails li').not('.image-additional').html(json['html']);*/
/* 										{% endif %}*/
/* 										{% endif %}*/
/* 									}*/
/* 									*/
/* 									if(json['sizedata']){*/
/* 										$('#sizedata').html(json['sizedata']);*/
/* 									}*/
/* 									*/
/* 									$('.oplx').remove();*/
/* 									if(json['model']){*/
/* 										$('.changemodel').text(json['model']);*/
/* 									}*/
/* 								},*/
/* 								error: function(xhr, ajaxOptions, thrownError) {*/
/* 									alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 								}*/
/* 							 });*/
/* 						});*/
/* 						*/
/* 						{% if module_eb_color_size_option_auto_trigger  %}*/
/* 						$('#productoptioncolor div div:first-child label').trigger('click');*/
/* 						{% endif %}*/
/* 					</script>*/
/* 					<script>*/
/* 					$('#product').delegate('input[name="option[size]"]', 'change', function(e) {*/
/* 						getsizevalues($(this).val());*/
/* 					});*/
/* 					*/
/* 					$('#product').delegate('select[name="option[size]"]', 'change', function(e) {*/
/* 						getsizevalues($(this).val());*/
/* 					});*/
/* 					*/
/* 					function getsizevalues(values){*/
/* 						$.ajax({*/
/* 							url: 'index.php?route=extension/optioncolorsize/optioncolorsize/getsizevalues&product_id={{ product_id }}&values='+values,*/
/* 							type: 'post',*/
/* 							dataType: 'json',                   */
/* 							success: function(json) {*/
/* 								$('.oplx').remove();*/
/* 								if(json['model']){*/
/* 									$('.changemodel').text(json['model']);*/
/* 								}*/
/* 							*/
/* 								html = '';*/
/* 								*/
/* 								if(json['sku']){*/
/* 									html += '<li class="oplx">{{ text_sku_c }} '+json['sku']+'</li>';*/
/* 								}*/
/* 								*/
/* 								if(json['upc']){*/
/* 									html += '<li class="oplx">{{ text_upc_c }} '+json['upc']+'</li>';*/
/* 								}*/
/* 							*/
/* 								if(json['ean']){*/
/* 								  html += '<li class="oplx">{{ text_ean_c }} '+json['ean']+'</li>';*/
/* 								}*/
/* 								*/
/* 								if(json['jan']){*/
/* 								   html += '<li class="oplx">{{ text_jan_c }} '+json['jan']+'</li>';*/
/* 								}*/
/* 							*/
/* 								if(html){*/
/* 									$('.optionmodel').after(html);*/
/* 								}*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 					</script>*/
/* 				  {% endif %}*/
/* 			*/
/* {{ footer }} */
/* */
