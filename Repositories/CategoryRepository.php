<?php

class CategoryRepository{


    function createPostCate($data){
        $dataCreate = [
          'name' => $data['name'],
          'parent_id'=> $data['parent_id']
        ];

        return (new Category())->create($dataCreate);
    }
    function updatePostCate($post_cate,$data){
        $dataUpdate = array(
            'name' =>isset($data['name']) ? $data['name'] : $post_cate->name,
            'parent_id' =>isset($data['parent_id']) ? $data['parent_id'] : $post_cate->parent_id
        );
        $post_cate->update($dataUpdate);
        return $post_cate;
    }

    public function getAllPostCate(){
        return (new Category())->getListPostCate([],"ORDER BY 'name'");
    }

   public function getTreeArray($parent_id,$tree_array= ''){
     if(!is_array($tree_array)){
         $tree_array= [];
     }
    $data=(new Category())->getCategoryParentId($parent_id);

    foreach ($data as $key =>$value){
        $parent_count =(new Category())->getCountParent($parent_id);
        $parent_last = (new Category())->getCountParentLast($parent_id);
        $tree_array[]= '<li class="dd-item" data-id="'.$data[$key]->id.'"><div class="dd-handle">'.$data[$key]->name.'</div></li>';
            if($parent_count !=0 ){
                $tree_array[]='<li class="dd-item" data-id="'.$data[$key]->id.'"><div class="dd-handle">'.$data[$key]->name.'</div>
                            <ol class="dd-list">';
            }
            $tree_array= $this->getTreeArray($data[$key]->id,$tree_array);
            if($parent_count !=0 ){
                $tree_array[]='</ol></li>';
            }
     }

     return $tree_array;
   }

}