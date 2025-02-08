

<?php $__env->startSection('content'); ?>
<div class="login-container">
    <h1 class="login-title">Login</h1>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" class="form-input" required>

        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" class="form-input" required>

        <button type="submit" class="login-btn">Login</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .login-container {
        background-color: #D2B48C; /* Coklat muda */
        padding: 30px;
        border-radius: 10px;
        max-width: 400px;
        margin: 50px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .login-title {
        text-align: center;
        color: #4B3621; /* Coklat gelap */
        font-size: 36px;
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 18px;
        color: #5C4033; /* Coklat medium */
        margin-bottom: 10px;
        display: block;
    }

    .form-input {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #BCAAA4; /* Warna coklat muda */
        border-radius: 5px;
        font-size: 16px;
        background-color: #F5F5F5;
    }

    .form-input:focus {
        border-color: #6D4C41; /* Coklat medium */
        outline: none;
    }

    .login-btn {
        width: 100%;
        background-color: #6D4C41; /* Coklat medium */
        color: white;
        padding: 12px;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-btn:hover {
        background-color: #4E342E; /* Coklat tua */
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TUGAS AKHIR\FINPRO\resources\views\login.blade.php ENDPATH**/ ?>