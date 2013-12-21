# EASYMARKETING Gambio Module

## Installation des Moduls
======================
Installationsanleitung:

1. Dateien in das `shoproot` Kopieren

2. /admin/includes/filenames.php (Bei Shopversionen vor 1.06 in /admin/includes/application_top.php)

		suche das hier:
		define('FILENAME_XSELL_GROUPS','cross_sell_groups.php');
		
		füge danach ein:
		define('FILENAME_EASYMARKETING','easymarketing.php');

3. /includes/application_bottom.php

		suche das hier:
		// end of page
		echo '</body>';
		echo '</html>';


		füge davor ein:
		## easymarketing - conversion tracking
		if (defined('MODULE_EASYMARKETING_STATUS') && MODULE_EASYMARKETING_STATUS == 'True') {
		  include(DIR_FS_CATALOG.'api/easymarketing/conversion_tracker.php');
		}
		## easymarketing - conversion tracking

4. /admin/includes/column_left.php

		suche das hier:
		if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['module_export'] == '1')) echo '<li><a href="' . xtc_href_link(FILENAME_MODULE_EXPORT) . '" class="menuBoxContentLink"> -' . BOX_MODULE_EXPORT . '</a></li>';


		füge danach das hier ein:
		if (($_SESSION['customers_status']['customers_status_id'] == '0') && ($admin_access['easymarketing'] == '1')) echo '<li><a href="' . xtc_href_link(FILENAME_EASYMARKETING, '') . '" class="menuBoxContentLink"> -' . BOX_EASYMARKETING . '</a></li>';


5. /lang/german/admin/german.php

		suche das hier:
		define('BOX_ORDERS_XSELL_GROUP','Cross-Marketing Gruppen');

		füge danach das hier ein:
		define('BOX_EASYMARKETING','EASYMARKETING AG');


6. /lang/english/admin/english.php

		suche das hier:
		define('BOX_ORDERS_XSELL_GROUP','Cross-sell groups');

		füge danach das hier ein:
		define('BOX_EASYMARKETING','EASYMARKETING AG');


7. SQL ausführen

		ALTER TABLE `admin_access` ADD `easymarketing` INT( 1 ) DEFAULT '0' NOT NULL;
		UPDATE `admin_access` SET `easymarketing` = '1' WHERE `customers_id` = '1' LIMIT 1;



## Konfiguration der Endpunkte
		
======================

Jetzt müssen noch die EASYMARKETING Endpunkte eingetragen werden in Ihrem EASYMARKETING Account. Über die Endpunkte kann EASYMARKETING entsprechende Produkte und Kategorien extrahieren aus Ihrem Shopsystem. Diese Endpunkte sind je Shopsystem unterschiedlich.

Dazu öffnen Sie bitte Ihre API Einstellungen in Ihrem EASYMARKETING Account unter `Meine Daten -> API`

Produkte API Endpunkt

	http://domain.tld/api/easymarketing/products.php
	
Beste Produkte API Endpunkt

	http://domain.tld/api/easymarketing/bestseller.php
	
Neue Produkte API Endpunkt

	http://domain.tld/api/easymarketing/products.php

Produkt via ID Endpunkt

	http://domain.tld/api/easymarketing/products.php

Kategorien API Endpunkt

	http://domain.tld/api/easymarketing/categories.php
	
**Produkt ID zum testen** 

Hier wird einfach zufällig eine Produkt ID aus Ihrem Shop eingetragen. Diese wird nur zu Test-Zwecken mit angegeben. EASYMARKETING testet dann, ob dieses einzelne Produkt erfolgreich extrahiert werden kann.

Wenn Sie in Ihrem Shop ein Produkt mit der ID `1` haben könnte dies z.B. sein:

	1

**ID der Root Kategorie**

Das ist die ID der höchsten Kategorie in Ihrem Shop. Die `Ober-Kategorie` bzw. `Root-Kategorie` enthält alle Unter-Kategorien Ihres Shopsystem. EASYMARKETING wird dann alle Unter-Kategorien versuchen zu extrahieren. In Ihrem `Kategorie-Verwalter` steht die ID typischerweise in dem Link wenn Sie mit der Maus über die `Ober-Kategorie` navigieren.


**Konfiguration des Shop Token**

Der Shop Token ist ein Passwort Ihres Shops. Dieses Passwort kann auf der Modul-Seite des Plugins definiert werden. EASYMARKETING übermittelt bei jeder Anfrage diesen `Shop Token`. Nur falls der `Shop Token` Ihrem eingegebenem Token entspricht, werden die Anfragen autorisiert. Sie müssen hier also genau den von Ihnen definierten `Shop Token` eingeben.

Beispiel:

Sie haben in Ihrem Backend auf der Modulseite den Token wie folgt definiert:

	  Shop Token: 123123123123
	  
Dann muss genau dieser Token auch in Ihrem EASYMARKETING Account eingegeben werden.


      Shop token: 123123123123
      
      
Über die Funktion `API Setup testen` kann jetzt überprüft werden ob die API-Endpunkte richtig konfiguriert sind und ob das Plugin richtig aktiviert wurde. Falls Sie Fehlermeldungen erhalten, kontaktieren Sie uns bitte.
			


## Installation des Moduls (Optional)
======================

Durch die Implementierung wird ein `facebook like` button im Checkout angezeigt, über den Produkte an Freunde weiter empfohlen werden können.

1. Die Datei `function.facebook_badge.php` aus dem addon Ordner in den Smarty plugin Ordner kopieren. Der Smarty Ordner befindet sich normalerweise in `/includes/classes/Smarty2.x/plugins`

2. im Template kann nun in den Artikeldetails `/templates/_dein_template_/module/produtcs_listing/_deine_listing_datei.html` das hier eingefügt werden:

		{facebook_badge products_id=$PRODUCTS_ID}


3. Für den Checkout in der Datei `/templates/_dein_template_/module/checkout_success.html` das hier einfügen:

		{facebook_badge}




## Für Entwickler
======================

* Im `master` gucken ob es nicht bereits bestehende bug-fixes gibt.

* Im `issue tracker` gucken ob das Feature bzw. der Bug schon behoben wurde.

* Forke das Projekt.

* Starte einen Feature/Bugfix branch.

* Commite so lange bis Du zufrieden bist mit der Arbeit.

* Erstelle einen Pull-Request mit dem erstellten Branch.