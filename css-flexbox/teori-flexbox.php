<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>css flexbox (teori)</title>
        <link rel="stylesheet" href="assets/css/teoristyle.css">
    </head>
    <body>
        <!-- Flexbox

            - merupakan model layout 1 dimensi yang dapat mengatur jarak dan penjajaran antar item dalam sebuah container
            - hanya dapat mengatur 1 dimensi pada saat tertentu antara baris / kolom, tidak bisa keduanya sekaligus
            - Sebuah modul yang menawarkan cara yang efektif untuk menyusun, mensejajarkan dan mendistribusikan jarak antar item di dalam sebuah container, meskipun ukurannya dinamis atau bahkan kita tidak tahu
            - Istilah pada flexbox
              1. main axis
                 -> sumbu utama dari sebuah container yang menentukan urutan dari penempatan items secara horizontal
              2. main-start | main-end
                 -> mulai dan berakhirnya items yang disimpan di dalam container
              3. main size
                 -> ukuran (width / height) dari container yang akan membuat dimensi dari itemsnya relatif terhadap main size

            - Properti pada container
              1. display : flex;
              2. flex-direction : row | row-reverse | column | column-reverse;
              3. flex-wrap : nowrap | wrap | wrap-reverse;
              4. justify-content : flex-start | flex-end | center | space-between | space-around | space-evenly;
              5. align-items : flex-start | flex-end | center | stretch | baseline;
              6. align-content : flex-start | flex-end | center | stretch | space-between | space-around;

            - Properti pada items
              1. order
              2. flex-grow
              3. align-self : auto | flex-start | flex-end | center | baseline | stretch
        -->
        <div class="img">
            <img src="assets/img/sc1.png" alt="istilah pada flexbox">
            <img src="assets/img/sc2.png" alt="component flexbox">

            <!-- Properti pada container -->
            <img src="assets/img/sc3.png" alt="containerProperty-flexDirection">
            <img src="assets/img/sc4.png" alt="containerProperty-flexWrap">
            <img src="assets/img/sc5.png" alt="containerProperty-justifyContent">
            <img src="assets/img/sc6.png" alt="containerProperty-alignItems">
            <img src="assets/img/sc7.png" alt="containerProperty-alignContent">

            <!-- Properti pada items -->
            <img src="assets/img/sc8.png" alt="containerItems-order">
            <img src="assets/img/sc9.png" alt="containerItems-flexGrow">
            <img src="assets/img/sc10.png" alt="containerItems-alignSelf">
        </div>
    </body>
</html>
