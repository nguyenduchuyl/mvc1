<style type="text/css" media="screen">

    ul{

        margin: 0;
        padding: 0;
        padding-top: 13px;
        list-style: none;
    }
    li{
        width: 150px;
        text-align: center;
    }
    .menus > ul{
        height: 40px;
    }
    .menus > ul > li{
        display: inline-block;
        border-right: 1px solid #dddddd;
        position: relative;
    }
    .menus > ul > li > ul {
        display: none;
        position: absolute;
        top: 15px;
    }
    .menus > ul > li > ul li{
        padding: 5px 0;
        border-bottom: 1px solid #dddddd;
    }
    ul li:last-child{
        border: none;
    }
    .menus ul li:hover ul{
        display: block;
    }
</style>
<div class="menus">

    <ul>
        <li><a href=<?php echo Route::name("index")?>>Home</a></li>
        <?php foreach ($post_cate as $category){ ?>
            <li>
                <?php if ($category->parent_id == 0){ ?>
                    <a href="#"><?php echo $category->name ?></a>

                    <ul style="z-index:1">
                        <?php foreach ($post_cate as $parent){ ?>
                            <?php if($parent->parent_id == $category->id){ ?>
                                <li><a href="#"><?php echo $parent->name ?></a></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>

                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</div>