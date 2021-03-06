<?php
    require_once('controllers/base_controller.php');
    require_once('models/product.php');

    class ProductsController extends BaseController {
        function __construct() {
            $this->folder = 'products';
        }

        public function index() {
            $products = Product::all();
            $data = array('products' => $products);
            $this->render('index', $data);
        }

        public function showProduct() {
            $id = $_GET['id'];
            $product = Product::find($id);
            $data = array('product' => $product);
            $this->render('show', $data);
        }
    }
?>