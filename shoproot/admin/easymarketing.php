<?php
/* -----------------------------------------------------------------------------------------
   $Id: easymarketing.php 6027 2013-11-07 11:48:21Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

require('includes/application_top.php');

// include needed function
require_once (DIR_FS_INC.'get_external_content.inc.php');
$iframe = get_external_content('http://api.easymarketing.de/analysis?width=1100&partner_id=modified&website_url='.HTTP_SERVER, 3, false);

require (DIR_WS_INCLUDES.'head.php');
?>
  </head>
<body>
  <!-- header //-->
  <?php require(DIR_WS_INCLUDES . 'header.php'); ?>
  <!-- header_eof //-->
  <!-- body //-->
  <table class="tableBody">
    <tr>
      <?php //left_navigation
      if (USE_ADMIN_TOP_MENU == 'false') {
        echo '<td class="columnLeft2">'.PHP_EOL;
        echo '<!-- left_navigation //-->'.PHP_EOL;       
        require_once(DIR_WS_INCLUDES . 'column_left.php');
        echo '<!-- left_navigation eof //-->'.PHP_EOL; 
        echo '</td>'.PHP_EOL;      
      }
      ?>
      <!-- body_text //-->
      <td class="boxCenter">
        <div class="pageHeadingImage"><?php echo xtc_image(DIR_WS_ICONS.'heading/icon_modules.png'); ?></div>
        <div class="pageHeading pdg2">Easymarketing</div>
        <div class="main">Modules</div>         
        <table class="tableCenter" style="width:1100px;">
          <tr style="background-color: #FFFFFF;">
            <td style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; padding: 0px 10px 11px 10px; text-align: justify">
              <br />
              <font color="#FF7A00"><strong>Vollautomatisiert und optimiert werben auf Google uvm.</strong></font>
              <a href="http://easymarketing.de/?partner=modified" target="_blank"><img src="images/easymarketing/logo-easymarketing.png" align="right" /></a>
              <br />
              <br />
              <font color="#FF7A00"><strong>In drei Schritten durchstarten:</strong></font>
              <ul>
                <li style="list-style-type: circle !important;">Auf easymarketing.de die Shop-URL eingeben</li>
                <li style="list-style-type: circle !important;">Automatische und dauerhafte Optimierung</li>
                <li style="list-style-type: circle !important;">Registrieren</li>
              </ul>
              EASYMARKETING crawlt Ihren Shop, erkennt dabei alle besonders performanten Keywords, erstellt automatisch aus mehreren 100 verschiedenen Keywords &uuml;ber
              1.000 verschiedene AdWordsAnzeigen, ver&ouml;ffentlicht diese bei Google &amp; optimiert die Ergebnisse permanent. Dank des intelligenten Algorithmus ist
              EASYMARKETING vielfach effizienter, als wenn der Online-H&auml;ndler die Anzeigenverwaltung manuell vornehmen w&uuml;rde, es wird sehr viel mehr Traffic und
              somit Umsatz generiert. Sie sparen somit Zeit und auch Geld, weil EASYMARKETING f&uuml;r Sie vollautomatisch arbeitetet und Ihr Budget mit Ber&uuml;cksichtigung
              Ihrer Konkurrenz auf Google optimal g&uuml;nstig aussteuert. Die CPC-Gebote werden also automatisch berechnet, so dass Sie als Werbetreibender nicht zu
              viel zahlen.
              <ul>
                <li style="list-style-type: circle !important;">Maximale Effizienz &uuml;ber die Werbeaktivit&auml;ten</li>
                <li style="list-style-type: circle !important;">Automatische und dauerhafte Optimierung</li>
                <li style="list-style-type: circle !important;">Hohe Zeitersparnis, da Kampagnen automatisch erstellt und gepflegt werden</li>
              </ul>
              <br />
              <a href="http://easymarketing.de/?partner=modified" target="_blank"><span style="font-size:12px; color:#FF7A00;"><u><strong>Weitere Infos zu Easymarketing finden Sie unter www.easymarketing.de</strong></u></span></a>
            </td>
          </tr>
          <tr style="background-color: #FFFFFF;">
            <td>
              <?php echo $iframe; ?>
            </td>
          </tr>
        </table>       
      </td>
      <!-- body_text_eof //-->
    </tr>
  </table>
  <!-- body_eof //-->
  <!-- footer //-->
  <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
  <!-- footer_eof //-->
  <br />
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>