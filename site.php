<?php
use \Hcode\Page;
use \Hcode\Model\Product;
use \Hcode\Model\Category;
use \Hcode\Model\Cart;

$app->get('/', function() {
    $products = Product::listAllqtd();
    $page = new page();
    $page->setTpl("index",[
        'products'=>Product::checkList($products)
    ]);

});

/*$app->get("/categories/:idcaregory", function($idcategory){

           
    $category = new Category();
    $category->get((int)$idcategory);
   
    $page = new Page();
    $page->setTpl("category",[
            'category'=>$category->getValues(),
            'products'=>Product::checkList($category->getProducts())
            
    ]);
});*/
$app->get("/categories/:idcaregory", function($idcategory){

    $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        
    $category = new Category();
    $category->get((int)$idcategory);
    $paginator = $category->getProductsPage($page);
   
    $pages = [];

    for ($i=1; $i <= $paginator['pages'] ; $i++) { 
        array_push($pages, [
            'link'=>'/categories/'.$category->getidcategory().'?page='.$i,
            'page'=>$i
        ]);
    }
    $page = new Page();
    $page->setTpl("category",[
            'category'=>$category->getValues(),
            'products'=>$paginator["data"],
            'pages'=>$pages
    ]);
});

$app->get("/products/:desurl", function($desurl){

    $product = new Product();
    $product->getFromUrl($desurl);
    $page = new Page();

    $page->setTpl("product-detail", [
        'product'=>$product->getValues(),
        'categories'=>$product->getCategories()
    ]);
});

$app->get("/cart", function(){
    $cart = Cart::getFromSession();
    
    $page = new Page();
    $page->setTpl("cart",[
        'cart'=>$cart->getValues(),
        'products'=>$cart->getProducts()
    ]);
});

$app->get("/cart/:idproduct/add", function($idproduct){
    $product = new Product();
        
    $product->get((int)$idproduct);
    
    $cart = Cart::getFromSession();
    
    $cart->addProduct($product);
   
    header("Location: /cart");
    exit;
});

$app->get("/cart/:idproduct/minus", function($idproduct){
    $product = new Product();
    $product->get((int)$idproduct);
    $cart = Cart::getFromSession();
    $cart->removeProduct($product);
    header("Location: /cart");
    exit;
});

$app->get("/cart/:idproduct/remove", function($idproduct){
    $product = new Product();
    $product->get((int)$idproduct);
    //$cart = Cart::getFromSession();
    $cart->removeProduct($product, true);
    header("Location: /cart");
    exit;
});


?>