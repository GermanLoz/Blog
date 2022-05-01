<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>German BLOG</title>


        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&display=swap" rel="stylesheet">        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('static/css/app.css')); ?>"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Rubik:wght@500;600;700;800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Roboto:wght@300;400;500;700;900&family=Rubik:wght@500;600;700;800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Montserrat:wght@100;200;300;400;500;600&family=Roboto:wght@300;400;500;700;900&family=Rubik:wght@500;600;700;800&display=swap" rel="stylesheet">
        <!-- Styles -->
    
    </head>
    <body>
        <?php if (isset($component)) { $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navbar::class, []); ?>
<?php $component->withName('Navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c)): ?>
<?php $component = $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c; ?>
<?php unset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c); ?>
<?php endif; ?>
        <div class="container-panel-inicio">
            <div class="text-panel-home">
                <h1 class="title-home">GERMAN LOZICKYJ</h1>
                <p class="p-home-panel">Mi nombre es German Lozickyj nacido y criado en Argentina soy un apasionado sobre el desarrollo de software y la fisica</p>
            </div>
            <div class="content-multimedia-panel">
                <img class="avatar-me" src="https://avatars.githubusercontent.com/u/67139543?v=4"></img>
            </div>
        </div>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.carrusel','data' => []]); ?>
<?php $component->withName('carrusel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.all-post','data' => []]); ?>
<?php $component->withName('all-post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </body>
    <script src="<?php echo e(asset('js/carrusel.js')); ?> "></script>
</html>
<?php /**PATH /var/www/html/resources/views/home/inicio.blade.php ENDPATH**/ ?>