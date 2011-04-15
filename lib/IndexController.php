<?php

class IndexController extends Zend_Controller_Action {

    public function indexAction()
    {
        $this->_helper->redirector->gotoSimpleAndExit('hello');
    }

    public function helloAction()
    {
        ?>

<h1>Welcome</h1>
<p>To meet your fellow campers, click the links below.</p>
<p>To add your profile, create/commit your controller and "push" your changes to the remote repo.</p>

        <?php
    }
}