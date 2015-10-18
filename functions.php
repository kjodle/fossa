 <?php
 if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

function fossa_display_sitemap() {
	$sitemaploc = get_site_url();
	$sitemap = $sitemaploc . 'sitemap.xml';
	include $sitemap;
}

function fossa_hier_menu() {
	echo "<div class=\"breadcrumb\"><b>You are here:</b>&nbsp;&nbsp;&nbsp;";
	get_breadcrumb_navigation(get_page_slug(false), '•', true);
	echo "</div>";
}

function fossa_child_menu() {
	echo "<div id=\"fossa_child_menu\"><p><b>Other pages in this category:</b></p>";
	go_child_menu();
	echo "</div>";
// Edited lines 117, 121, 128, 132 in original plugin file. Need to figure out action to swipe old values for those in this functions file.
}

// Check for components:
// From http://www.cyberiada.org/cnb/log/check-if-a-component-exists-in-getsimple/
if (!function_exists('component_exists')) {
    function component_exists($id) {
        global $components;
        if (!$components) {
             if (file_exists(GSDATAOTHERPATH.'components.xml')) {
                $data = getXML(GSDATAOTHERPATH.'components.xml');
                $components = $data->item;
            } else {
                $components = array();
            }
        }
        $exists = FALSE;
        if (count($components) > 0) {
            foreach ($components as $component) {
                if ($id == $component->slug) {
                    $exists = TRUE;
                    break;
                }
            }
        }
        return $exists;
    }
}

function fossa_sharetop() {
	if (component_exists('share-top')) {
		echo "<div id=\"share-top\">";
		get_component('share-top');
		echo "</div><div class=\"clear\"></div>";
	}
	else {
		return;
	}
}

function fossa_sharebottom() {
	if (component_exists('share-bottom')) {
		echo "<div id=\"share-bottom\">";
		get_component('share-bottom');
		echo "</div><div class=\"clear\"></div>";
	}
	else {
		return;
	}
}

function fossa_sidebar1_ads() {
	if (component_exists('sidebar1-ads')) {
		echo "<div class=\"sidebarads\">";
		get_component('sidebar1-ads');
		echo "</div><div class=\"clear\"></div>";
	}
	else {
		return;
	}
}

function fossa_sidebar2_ads() {
	if (component_exists('sidebar2-ads')) {
		echo "<div class=\"sidebarads\">";
		get_component('sidebar2-ads');
		echo "</div><div class=\"clear\"></div>";
	}
	else {
		return;
	}
}


?>