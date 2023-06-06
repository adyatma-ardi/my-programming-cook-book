<?php

class App
{
    protected $controller ='home',
              $method = 'index',
              $params = [];

    public function __construct()
    {
        $url = $this->_parseUrl();
        // var_dump($url);

        // controller
        if (file_exists('../app/controllers/'. $url[0]. '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            header('Location: '. BASEURL . '/home/index.php');
        }

        // var_dump($this->controller);
        // instansiasi controller agar methodnya dapat digunakan
        include '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    // Routing
    /*
        Routing adalah proses dimana suatu item dapat sampai ke tujuan dari satu lokasi ke lokasi lain. Dalam hal ini, item yang dimaksud adalah halaman aplikasi website. Developer dapat menentukan sendiri halaman yang akan muncul.
    */
    public function _parseUrl()
    {
        if (isset($_GET['url'])) {
            // menghilangkan tanda slash '/' pada url
            $url = rtrim($_GET['url'], '/');
            // membersihkan karakter yang aneh
            $url = htmlspecialchars($url);
            // pecah array tersebut dengan delimitir slash '/'
            $url = explode('/', $url);
            return $url;
        }
    }
}
