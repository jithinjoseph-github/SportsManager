<?php
$this->layout = 'login_register';
?>
<div class="register-box">
    <div class="register-logo">
        <b>Sports Manager</b>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Create a new account</p>
            <?= $this->Form->create($user) ?>
            <div class="input-group mb-3">
                <?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => 'Name']) ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
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
            <div class="input-group mb-3">
                <?= $this->Form->select(
                    'role',
                    [
                        'Club Manager', 'Match Organizer', 'Coach', 'Player'
                    ],
                    [
                        'class' => 'form-control',
                        'placeholder' => 'Role',
                        'empty' => 'Choose Role',
                        'value' => ''
                    ]
                ) ?>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <?= $this->Html->link(__('Already have an account ?'), ['controller' => 'Users', 'action' => 'login']) ?>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block']) ?>
                </div>
                <!-- /.col -->
            </div>
            <?= $this->Form->end() ?>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->