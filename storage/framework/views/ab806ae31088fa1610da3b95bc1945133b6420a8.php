<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar </h1>

<?php if(session('mensaje')): ?>

<div><?php echo e(session('mensaje')); ?></div>

<?php endif; ?>

    <form action="<?php echo e(route('Books.update',$bookEdit->id)); ?>"method="post">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>

<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div>
        el nombre es obligatorio        
    </div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div>
        el Titulo es obligatorio        
    </div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<?php $__errorArgs = ['publish_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div>
        la fecha  es obligatoria        
    </div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<?php $__errorArgs = ['author_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div>
        el autor  es obligatorio        
    </div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <input type="text" name="name" placeholder="name" value="<?php echo e($bookEdit->Author->name); ?>">
    <input type="text" name="title" placeholder="title" value="<?php echo e($bookEdit->title); ?>">
    <input type="date" name="publish_date" placeholder="publish_date" value="<?php echo e($bookEdit->publish_date->format('d /m /y')); ?>">
    <input type="text" name="author_id" placeholder="author_id" value="<?php echo e($bookEdit->author_id); ?>">
    <button type="submit">Actualizar</button>
    
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\prueba\resources\views/Books/edit.blade.php ENDPATH**/ ?>