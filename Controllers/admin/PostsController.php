<?php
require_once('Controllers/Controller.php');
require_once('Models/frontend/Posts.php');
require_once ('Models/frontend/User.php');
require_once ('libs/Validator.php');
require_once ('Repositories/PostRepository.php');
require_once ('Models/frontend/Category.php');
require_once('Repositories/CategoryRepository.php');
class PostsController extends Controller
{

    protected $repository;
    protected $repository1;
    public function __construct()
    {
        parent::__construct();
        $this->repository = new PostRepository();
        $this->repository1 = new CategoryRepository();
    }
    public function index(){
        $posts = $this->repository->getAllPost();
        $post_cate = $this->repository1->getAllPostCate();
        return $this->view('admin/posts/index',compact('posts','post_cate'));
    }
    public function deletePost(){
        $post = (new Posts())->find($this->data['post_id']);

        if(is_null($post)){
            return $this->response([
                'code'    => 404,
                'message' => 'User not found'
            ]);
        }

        $post->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Delete Successfully'
        ]);
    }

    public function showFormPost(){
        $post = (new Posts())->find($this->data['post_id']);

        if(is_null($post)){
            return $this->response([
                'message' => 'Post not found'
            ]);
        }

        return $this->view('admin/posts/edit-post',compact('post'));
    }
    public function createPost(){
        $post=$this->repository->createPost($this->data) ;
        return $this->response([
            'code' => 200,
            'message' => 'Create successfully'
        ]);

    }
    public function updatePost(){
        $post = (new Posts())->find($this->data['post_id']);

        if(is_null($post)){
            return $this->response([
                'code'    => 404,
                'message' => 'Post is not found'
            ]);
        }
        //TODO SOMETHING: validate data

        $post=$this->repository->updatePost( $this->data,$post);

        return $this->response([
            'code' => 200,
            'message' => 'Edit successfully'
        ]);
    }

}