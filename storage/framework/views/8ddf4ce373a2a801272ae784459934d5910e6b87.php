<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('static/css/login.css')); ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Rubik:wght@500;600;700;800&display=swap" rel="stylesheet">
    <title>Login Blog</title>
</head>
<body>
    <div class="container-login">
        <h1>Login</h1>
        <form method="POST" class="form-grid" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <input type="email" class="input-default" placeholder="Email" id="email" name="email"/>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span>
                    <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input type="password" class="input-default" placeholder="Password" id="password" name="password"/>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span>
                    <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input type="submit"class="button-login" value="login"/>
        </form>
    </div>
</body>
</html><?php /**PATH C:\Apache24\htdocs\blog\resources\views/pages/login.blade.php ENDPATH**/ ?>