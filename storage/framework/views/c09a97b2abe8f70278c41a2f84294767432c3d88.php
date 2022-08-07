<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo e(asset('static/css/backend.css')); ?>"/>
    <title>admin</title>
</head>
<body>

    <div class="nav">
        <ul>
            <li>
                <a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-align-justify"></i>
                    <p>Cerrar sesion</p>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('create-post')); ?>">
                    <i class="fa-solid fa-align-justify"></i>
                    <p>Create post</p>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('admin-users')); ?>">
                    <i class="fa-solid fa-align-justify"></i>
                    <p>Users</p>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('landing')); ?>">
                    <i class="fa-solid fa-align-justify"></i>
                    <p>Content Landing</p>
                </a>
            </li>
        
        </ul>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    </div><?php /**PATH C:\Apache24\htdocs\blog\resources\views/components/navbar-backend.blade.php ENDPATH**/ ?>