<?php

/*
    Class
    - Blueprint / template untuk membuat instance dari object
    - Class mendefinisikan object
    - Class menyimpan data dan perilaku yang disebut dengan property dan method
    - Aturan penamaan sebaiknya gunakan CamelCase

                "ClassSaya"

    - Cara membuat class

      "Diawali dengan menuliskan keyword class, diikuti nama dan dibatasi dengan {} untuk menyimpan property dan method"

      class ClassSaya {

      }
*/

/*
    object
    - Instance yang didefinisikan oleh Class
    - Banyak object dapat dibuat menggunakan satu class
    - Object dibuat dengan menggunakan keyword new


      $a = new ClassSaya();

*/

    class ProdukSaya {

    }

    $produk1 = new ProdukSaya();
    $produk2 = new ProdukSaya();

    var_dump($produk1);
