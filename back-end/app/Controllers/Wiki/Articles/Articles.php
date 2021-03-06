<?php
namespace App\Controllers\Wiki\Articles;

use App\Controllers\BaseController;
use App\Libraries\JWT\ValidateJWT;
use App\Models\Articles\ArticlesModel;
use CodeIgniter\API\ResponseTrait;
use Exception;

class Articles extends BaseController {
    use ResponseTrait;

    public function index() {
        $this->response->setHeader('Access-Control-Allow-Origin', '*')
                       ->setHeader('Access-Control-Allow-Headers', '*')
                       ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE')
                       ->setStatusCode(200);
        $this->response->setContentType('application/json');

		try {
            //$jwt = new ValidateJWT();
            $articleModel = new ArticlesModel();

            $objArticles = $articleModel->where('id_status <>', 3)->asObject()->findAll();
            //return json_encode($objArticles);die;

            if (!$objArticles) {
                return $this->fail('Oops! Desculpe, nenhum artigo encontrado.', 404);
            } else {
                /*$decoded = $jwt->getToken();

                if ($decoded) {
                    $response = [
                        'status' => 200,
                        'error' => FALSE,
                        'messages' => 'Listagem de Categorias.',
                        'data' => $objArticles
                    ];

                    return $this->respond($response);
                }*/
                $response = [
                    'status' => 200,
                    'error' => FALSE,
                    'messages' => 'Listagem de Artigos.',
                    'data' => $objArticles
                ];

                return $this->respond($response);
            }
        } catch (Exception $ex) {
            $response = [
                'status' => 401,
                'error' => TRUE,
                'messages' => 'Acesso Negado. Token expirado ou não existe.'
            ];

            return $this->respond($response);
        }
    }

    public function getArticleByID(int $id_article) {
        $this->response->setHeader('Access-Control-Allow-Origin', '*')
                       ->setHeader('Access-Control-Allow-Headers', '*')
                       ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE')
                       ->setStatusCode(200);
        $this->response->setContentType('application/json');

		try {
            //$jwt = new ValidateJWT();
            $articleModel = new ArticlesModel();

            $objArticles = $articleModel->where('id', $id_article)->where('id_status <>', 3)->asObject()->findAll();
            //return json_encode($objArticles);die;

            if (!$objArticles) {
                return $this->fail('Oops! Desculpe, nenhum artigo encontrado.', 404);
            } else {
                /*$decoded = $jwt->getToken();

                if ($decoded) {
                    $response = [
                        'status' => 200,
                        'error' => FALSE,
                        'messages' => 'Listagem de Categorias.',
                        'data' => $objArticles
                    ];

                    return $this->respond($response);
                }*/
                $response = [
                    'status' => 200,
                    'error' => FALSE,
                    'messages' => 'Listagem de Artigos por subcategoria.',
                    'data' => $objArticles
                ];

                return $this->respond($response);
            }
        } catch (Exception $ex) {
            $response = [
                'status' => 401,
                'error' => TRUE,
                'messages' => 'Acesso Negado. Token expirado ou não existe.'
            ];

            return $this->respond($response);
        }
    }

    public function getArticleBySlug(string $article_slug) {
        $this->response->setHeader('Access-Control-Allow-Origin', '*')
                       ->setHeader('Access-Control-Allow-Headers', '*')
                       ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE')
                       ->setStatusCode(200);
        $this->response->setContentType('application/json');

		try {
            //$jwt = new ValidateJWT();
            $articleModel = new ArticlesModel();

            $objArticles = $articleModel->where('slug', $article_slug)->where('id_status <>', 3)->asObject()->findAll();
            //return json_encode($objArticles);die;

            if (!$objArticles) {
                return $this->fail('Oops! Desculpe, nenhum artigo encontrado.', 404);
            } else {
                /*$decoded = $jwt->getToken();

                if ($decoded) {
                    $response = [
                        'status' => 200,
                        'error' => FALSE,
                        'messages' => 'Listagem de Categorias.',
                        'data' => $objArticles
                    ];

                    return $this->respond($response);
                }*/
                $response = [
                    'status' => 200,
                    'error' => FALSE,
                    'messages' => 'Artigo selecionado.',
                    'data' => $objArticles
                ];

                return $this->respond($response);
            }
        } catch (Exception $ex) {
            $response = [
                'status' => 401,
                'error' => TRUE,
                'messages' => 'Acesso Negado. Token expirado ou não existe.'
            ];

            return $this->respond($response);
        }
    }

    public function getArticlesBySubcategorieID(int $id_subcategorie) {
        $this->response->setHeader('Access-Control-Allow-Origin', '*')
                       ->setHeader('Access-Control-Allow-Headers', '*')
                       ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE')
                       ->setStatusCode(200);
        $this->response->setContentType('application/json');

		try {
            //$jwt = new ValidateJWT();
            $articleModel = new ArticlesModel();

            //$objArticles = $articleModel->where('id_subcategorie', $id_subcategorie)->where('id_status <>', 3)->asObject()->findAll();
            $objArticles = $articleModel->getArticlesBySubcategorieID($id_subcategorie);
            //return json_encode($objArticles);die;

            if (!$objArticles) {
                return $this->fail('Oops! Desculpe, nenhum artigo encontrado.', 404);
            } else {
                /*$decoded = $jwt->getToken();

                if ($decoded) {
                    $response = [
                        'status' => 200,
                        'error' => FALSE,
                        'messages' => 'Listagem de Categorias.',
                        'data' => $objArticles
                    ];

                    return $this->respond($response);
                }*/
                $response = [
                    'status' => 200,
                    'error' => FALSE,
                    'messages' => 'Listagem de Artigos por subcategoria.',
                    'data' => $objArticles
                ];

                return $this->respond($response);
            }
        } catch (Exception $ex) {
            $response = [
                'status' => 401,
                'error' => TRUE,
                'messages' => 'Acesso Negado. Token expirado ou não existe.'
            ];

            return $this->respond($response);
        }
    }

    public function getArticlesBySubcategorieSlug(string $subcategorie_slug) {
        $this->response->setHeader('Access-Control-Allow-Origin', '*')
                       ->setHeader('Access-Control-Allow-Headers', '*')
                       ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE')
                       ->setStatusCode(200);
        $this->response->setContentType('application/json');

		try {
            //$jwt = new ValidateJWT();
            $articleModel = new ArticlesModel();

            // $objArticles = $articleModel->where('id_subcategorie', $subcategorie_slug)->where('id_status <>', 3)->asObject()->findAll();
            $objArticles = $articleModel->getArticlesBySubcategorieSlug($subcategorie_slug);
            //return json_encode($objArticles);die;

            if (!$objArticles) {
                return $this->fail('Oops! Desculpe, nenhum artigo encontrado.', 404);
            } else {
                /*$decoded = $jwt->getToken();

                if ($decoded) {
                    $response = [
                        'status' => 200,
                        'error' => FALSE,
                        'messages' => 'Listagem de Categorias.',
                        'data' => $objArticles
                    ];

                    return $this->respond($response);
                }*/
                $response = [
                    'status' => 200,
                    'error' => FALSE,
                    'messages' => 'Listagem de Artigos por subcategoria.',
                    'data' => $objArticles
                ];

                return $this->respond($response);
            }
        } catch (Exception $ex) {
            $response = [
                'status' => 401,
                'error' => TRUE,
                'messages' => 'Acesso Negado. Token expirado ou não existe.'
            ];

            return $this->respond($response);
        }
    }
}