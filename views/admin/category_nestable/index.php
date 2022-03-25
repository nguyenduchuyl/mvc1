<?php include 'views/frontend/layout/master.php' ?>
<?php startblock('title') ?>
    Category manage using nestable
<?php endblock() ?>
<?php startblock('css') ?>
    <?php include('views/admin/category_nestable/css.php')?>

<?php endblock()?>

<?php startblock('content') ?>

        <menu id="nestable-menu">
                <button type="button" data-action="expand-all">Expand All</button>
                <button type="button" data-action="collapse-all">Collapse All</button>
        </menu>
           <div class="cf nestable-lists">

                               <div class="dd" id="nestable">
                                   <ol class="dd-list">
                                       <?php foreach ($post_cate as $category){ ?>

                                           <li class="dd-item" data-id="2">
                                           <?php if ($category->parent_id == 0 ) {?>
                                               <div class="dd-handle"><?php echo $category->name ?></div>
                                               <ol class="dd-list">
                                                   <?php foreach ($post_cate as $pr){ ?>
                                                       <?php if ($category->id == $pr->parent_id){ ?>
                                                           <li class="dd-item" data-id="3"><div class="dd-handle"><?php echo $pr->name ?></div></li>
                                                       <?php } ?>
                                                   <?php } ?>
                                               </ol>
                                               <?php } ?>
                                           </li>
                                       <?php } ?>
                                   </ol>
                               </div>



                    </div>
                <p><strong>Serialised Output (per list)</strong></p>

                <textarea id="nestable-output"></textarea>


<?php endblock() ?>

<?php startblock('script') ?>
    <?php include('script.php')?>


    <script>
       $(document).ready(function()
       {

           var updateOutput = function(e)
           {
               var list   = e.length ? e : $(e.target),
                   output = list.data('output');
               if (window.JSON) {
                   output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
               } else {
                   output.val('JSON browser support required for this demo.');
               }
           };

           // activate Nestable for list 1
           $('#nestable').nestable({
               group: 1
           })
           .on('change', updateOutput);


           // output initial serialised data
           updateOutput($('#nestable').data('output', $('#nestable-output')));
          

           $('#nestable-menu').on('click', function(e)
           {
               var target = $(e.target),
                   action = target.data('action');
               if (action === 'expand-all') {
                   $('.dd').nestable('expandAll');
               }
               if (action === 'collapse-all') {
                   $('.dd').nestable('collapseAll');
               }
           });

           $('#nestable3').nestable();

       });
    </script>

<?php endblock() ?>