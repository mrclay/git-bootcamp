<?php

class SteveController extends IndexController {

    public function helloAction() {
        // Customize your greeting
        //
        // In a real app, we'd pull this from a DB and render it using a view script,
        // but for this excerse, this will do.
        ?>

<h1>Hy, my name is Steve!</h1>
<p>I like to do things!</p>

        <?php
    }
}
