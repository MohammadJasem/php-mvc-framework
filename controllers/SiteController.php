<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\LoginForm;
use app\models\Product;
use app\models\User;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function home()
    {
        return $this->render('home', [
            'name' => 'My Framework',
            'title' => 'Home'
        ]);
    }

    public function login(Request $request)
    {
        $loginForm = new LoginForm();
        if ($request->getMethod() === 'post') {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                Application::$app->response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $registerModel = new User();
        if ($request->getMethod() === 'post') {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                return 'Show success page';
            }

        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function contact()
    {
        return $this->render('contact', [
            'title' => 'Contact'
        ]);
    }

    public function profile()
    {
        return $this->render('profile');
    }

    public function products()
    {
        $products = [];
        $products = Product::findAll();
        return $this->render('products',['products' => $products, 'jsFile' => 'products', 'title' => 'Products']);
    }

    public function deleteProducts(Request $request)
    {
        $productIds = $request->getBody()['productIds'];
        for($i = 0; $i < count($productIds); $i++)
            Product::delete($productIds[$i]);
            echo json_encode('isDeleted');
    }

    public function addProduct(Request $request)
    {
        $productModel = new Product();
        if ($request->getMethod() === 'post') {
            $productModel->loadData($request->getBody());
            if ($productModel->validate() && $productModel->save()) {
                Application::$app->session->setFlash('success', 'Added');
                Application::$app->response->redirect('/products');
                return 'Show success page';
            }

        }
        return $this->render('addProduct',['model' => $productModel, 'jsFile' => 'addProduct', 'title' => 'Add Product']);
    }
}