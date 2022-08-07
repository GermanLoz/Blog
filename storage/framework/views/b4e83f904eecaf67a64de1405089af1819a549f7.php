<div class="container-admin"> 
    
    <h1 class="title-backend">Crear Post</h1>
    <form method="POST" action="<?php echo e(route('post-create')); ?>" class="form-create" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <select class="select-create" name="select">
            <option value="0">Repeat 0</option>
            <option value="1">Repeat 1</option>
            <option value="2">Repeat 2</option>
            <option value="3">Repeat 3</option>
        </select>
        <select class="select-create" name="section_id" value="Section">
            <option value="1">Physics</option>
            <option value="2"> Programming</option>
            <option value="3">Summaries books</option>
        </select>
        <input type="text" class="title-form" name="path" id=="path" placeholder="path"/>
        <div id="content_form">
            <input type="text" class="title-form" name="title" id=="title" placeholder="title"/>
            <input type="file" name="main_image" placeholder="Imagen"/>
            <textarea name="article" id=="article"></textarea>
        </div>
    <input type="submit" id=="send" value="Crear post"/>
    </form>
</div>
<script src="<?php echo e(asset('js/duplicate_form.js')); ?> "></script>
<?php /**PATH C:\Apache24\htdocs\blog\resources\views/components/form-create.blade.php ENDPATH**/ ?>