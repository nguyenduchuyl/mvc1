<?php
require_once('Controllers/Controller.php');
require_once('Models/frontend/Category.php');
require_once ('libs/Validator.php');
require_once ('Models/frontend/User.php');
require_once('Repositories/CategoryRepository.php');

class CategoryController extends Controller
{

    protected $repository;

    public function __construct()
    {
        parent::__construct();
        $this->repository = new CategoryRepository();
    }
    public function index(){
        $post_cate = $this->repository->getAllPostCate();
        return $this->view('admin/category/index',compact('post_cate'));
    }
    public function showFormEdit(){
        $category = (new Category())->find($this->data['category_id']);

        if(is_null($category)){
            return $this->response([
                'message' => 'Category not found'
            ]);
        }

        return $this->view('admin/category/edit-category',compact('category'));
    }
    public function editCategory(){
        $category = (new Category())->find($this->data['id']);

        if(is_null($category)){
            return $this->response([
                'code'    => 404,
                'message' => 'Category not found'
            ]);
        }
        //TODO SOMETHING: validate data

        $category=$this->repository->updatePostCate($category, $this->data);

        return $this->response([
            'code' => 200,
            'message' => 'Edit successfully'
        ]);
    }

    public function deleteCategory(){
        $category = (new Category())->find($this->data['category_id']);

        if(is_null($category)){
            return $this->response([
                'code'    => 404,
                'message' => 'User not found'
            ]);
        }

        $category->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Delete Successfully'
        ]);
    }
    public function createCategory(){
        $category=$this->repository->createPostCate($this->data) ;

        return $this->response([
            'code' => 200,
            'message' => 'Create successfully'
        ]);
    }

    public function showCategoryNesTable(){
        $categories = $this->repository->getAllPostCate();
        $post_cate = $this->repository->getAllPostCate();
       // $array_tree= $this->repository->getTreeArray(0);
       // print_r($array_tree);
        //die;
        return $this->view('admin/category_nestable/index',compact("post_cate"));
    }

}