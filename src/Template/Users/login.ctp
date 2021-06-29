<?php
$this->layout = 'login_register';
?>

<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <?= $this->Flash->render('auth') ?>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?= $this->Form->create() ?>
            <div class="input-group mb-3">
                <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Email']) ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'Password']) ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <p class="mb-1">
                        <?= $this->Html->link(__('Forgot password ?'), ['controller' => 'Users', 'action' => 'forgetPassword']) ?>
                    </p>
                    <p class="mb-1">
                        <?= $this->Html->link(__('Don\'t have an account ?'), ['controller' => 'Users', 'action' => 'register']) ?>
                    </p>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary btn-block']); ?>
                </div>
                <!-- /.col -->
            </div>
            <?= $this->Form->end() ?>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->