<?php

require __DIR__  . '/../COE_dev/autoload.php';
Coe_Loader::prependIncludePath(__DIR__ . '/lib');

// at minimum, need a layout

function layout_layout(Zend_View $view)
{
    echo $view->layout()->content;
    echo "<hr>";
    $links = array();
    $baseUrl = $view->baseUrl(); // baseUrl helper

    foreach (new DirectoryIterator(__DIR__ . '/lib') as $fileInfo) {
        /* @var $fileInfo DirectoryIterator */
        if (preg_match('/^([A-Z]\\w+)Controller\\.php$/', $fileInfo->getFilename(), $m)) {
            if ($m[1] === 'Index') {
                continue;
            }
            $links[] = "<li><a href='$baseUrl/" . strtolower($m[1]) . "/hello'>" . $m[1] . "</a></li>";
        }
    }
    echo "<h4>Other awesome people:</h4><ul>" . implode('', $links) . "</ul>";
    echo "<p>Also see the <a href='$baseUrl/README.txt'>README</a>.</p>";
}

$app = new MrClay_QAD_App(array(
    'prependPathInfo' => '',
    'controllersPath' => __DIR__ . '/lib',
));
$app->controllerInvokeArgs['displayExceptions'] = true;
$app->run();
