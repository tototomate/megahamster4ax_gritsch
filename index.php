<?php
/**
 * Created by PhpStorm.
 * User: totog
 * Date: 17.09.2019
 * Time: 12:05
 */

?>

<html>
    <head>
        <title>
            Megahamster | Ihr Hamsterversorger
        </title>
        <style type="text/css">
            #list-products{
                color:white;
                background:grey;
            }
        </style>
    </head>
    <body>
        <header id="welcome">

        </header>
        <section id="list-products">
            <?php

                $array_products = ["The room", "The flat", "The pit"];
                foreach($array_products as $products){
                    $text=<<<ENDE
                     <div class="product">
                        <h1>
                            $products
                        </h1>
                        <p>
                         EUR 129,-
                        </p>
                     </div>
ENDE;
                    echo $text;
                }
            ?>
        </section>
        <footer id="contract">
            <p>
                <small>
                    0699 10840191
                </small>
            </p>
        </footer>
    </body>
</html>

