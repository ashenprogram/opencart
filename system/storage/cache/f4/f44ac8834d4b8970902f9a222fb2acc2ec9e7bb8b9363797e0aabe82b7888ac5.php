<?php

/* extension/dashboard/recent_info.twig */
class __TwigTemplate_7ef32b52df9942c17374241b473d05208d1f9e192588065d251e50fce64cf8a0 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
  </div>
  <div class=\"table-responsive\">
    <table class=\"table\">
      <thead>
        <tr>
          <td class=\"text-right\">";
        // line 9
        echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
        echo "</td>
          <td>";
        // line 10
        echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
        echo "</td>
          <td>";
        // line 11
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
          <td>";
        // line 12
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 13
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 14
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 20
                echo "        <tr>
          <td class=\"text-right\">";
                // line 21
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</td>
          <td>";
                // line 22
                echo $this->getAttribute($context["order"], "customer", array());
                echo "</td>
          
    ";
                // line 24
                if (($this->getAttribute($context["order"], "status", array()) == "Shipped")) {
                    echo " <td><span style=\"color:orange\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } elseif (($this->getAttribute(                // line 25
$context["order"], "status", array()) == "Pending")) {
                    echo " <td><span style=\"color:red\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } elseif (($this->getAttribute(                // line 26
$context["order"], "status", array()) == "Complete")) {
                    echo " <td><span style=\"color:green\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } elseif (($this->getAttribute(                // line 27
$context["order"], "status", array()) == "Collected")) {
                    echo " <td><span style=\"color:green\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } elseif (($this->getAttribute(                // line 28
$context["order"], "status", array()) == "Processing")) {
                    echo " <td><span style=\"color:blue\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } elseif (($this->getAttribute(                // line 29
$context["order"], "status", array()) == "Store Collection")) {
                    echo " <td><span style=\"color:orange\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } elseif (($this->getAttribute(                // line 30
$context["order"], "status", array()) == "Pre-order")) {
                    echo " <td><span style=\"color:orange\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } elseif (($this->getAttribute(                // line 31
$context["order"], "status", array()) == "Canceled")) {
                    echo " <td><span style=\"color:red\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } elseif (($this->getAttribute(                // line 32
$context["order"], "status", array()) == "Processed")) {
                    echo " <td><span style=\"color:#0096ff\">";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</span></td>
    ";
                } else {
                    // line 33
                    echo " <td>";
                    echo $this->getAttribute($context["order"], "status", array());
                    echo "</td>
    ";
                }
                // line 35
                echo "        
          <td>";
                // line 36
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 37
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
          <td class=\"text-right\"><a href=\"";
                // line 38
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        } else {
            // line 42
            echo "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 43
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
        </tr>
        ";
        }
        // line 46
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/recent_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 46,  167 => 43,  164 => 42,  161 => 41,  150 => 38,  146 => 37,  142 => 36,  139 => 35,  133 => 33,  126 => 32,  120 => 31,  114 => 30,  108 => 29,  102 => 28,  96 => 27,  90 => 26,  84 => 25,  78 => 24,  73 => 22,  69 => 21,  66 => 20,  61 => 19,  59 => 18,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> {{ heading_title }}</h3>*/
/*   </div>*/
/*   <div class="table-responsive">*/
/*     <table class="table">*/
/*       <thead>*/
/*         <tr>*/
/*           <td class="text-right">{{ column_order_id }}</td>*/
/*           <td>{{ column_customer }}</td>*/
/*           <td>{{ column_status }}</td>*/
/*           <td>{{ column_date_added }}</td>*/
/*           <td class="text-right">{{ column_total }}</td>*/
/*           <td class="text-right">{{ column_action }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% if orders %}*/
/*         {% for order in orders %}*/
/*         <tr>*/
/*           <td class="text-right">{{ order.order_id }}</td>*/
/*           <td>{{ order.customer }}</td>*/
/*           */
/*     {% if order.status == 'Shipped' %} <td><span style="color:orange">{{ order.status }}</span></td>*/
/*     {% elseif order.status == 'Pending' %} <td><span style="color:red">{{ order.status }}</span></td>*/
/*     {% elseif order.status == 'Complete' %} <td><span style="color:green">{{ order.status }}</span></td>*/
/*     {% elseif order.status == 'Collected' %} <td><span style="color:green">{{ order.status }}</span></td>*/
/*     {% elseif order.status == 'Processing' %} <td><span style="color:blue">{{ order.status }}</span></td>*/
/*     {% elseif order.status == 'Store Collection' %} <td><span style="color:orange">{{ order.status }}</span></td>*/
/*     {% elseif order.status == 'Pre-order' %} <td><span style="color:orange">{{ order.status }}</span></td>*/
/*     {% elseif order.status == 'Canceled' %} <td><span style="color:red">{{ order.status }}</span></td>*/
/*     {% elseif order.status == 'Processed' %} <td><span style="color:#0096ff">{{ order.status }}</span></td>*/
/*     {% else %} <td>{{ order.status }}</td>*/
/*     {% endif %}*/
/*         */
/*           <td>{{ order.date_added }}</td>*/
/*           <td class="text-right">{{ order.total }}</td>*/
/*           <td class="text-right"><a href="{{ order.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% else %}*/
/*         <tr>*/
/*           <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*         </tr>*/
/*         {% endif %}*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* </div>*/
/* */
