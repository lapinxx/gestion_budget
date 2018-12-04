<?php echo View::forge('header'); ?>

<div id="login-form" class="col-md-4 col-md-offset-4 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="fa fa-lock"></i> Connexion
        </div>
        <div class="panel-body">
            <?php echo Form::open(array('action' => 'auth/login', 'method' => 'post')); ?>

            <div class="form-group">

                <?php echo Form::label('Username', 'username'); ?>
                <?php echo Form::input('username', null, array('class' => 'form-control')); ?>
            </div>
            <div class="form-group">

                <?php echo Form::label('Password', 'password'); ?>
                <?php echo Form::password('password', null, array('class' => 'form-control')); ?>
            </div>

            <?php echo Form::submit('submit', 'Se connecter', array('class' => 'btn btn-primary')); ?>


            <?php echo Form::close(); ?>
        </div>
    </div>
</div>


<?php echo View::forge('footer'); ?>