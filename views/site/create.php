<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'My Company Application';
?>
<div class="site-index">
    <h1>Create Company</h1>
    <div class="body-content">
        <?php
        $form=ActiveForm::begin()
        ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($company,'Name');?>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($company,'Description')->textarea(['rows'=>'4']);?>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($company,'Location')->radioList( [0=>'Mumbai', 1 => 'Gujrat', 2 => 'pune'] );?>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($company,'Type')->dropDownList( ['a'=>'Select company type','b' => 'IT', 'c' => 'Financial', 'd' => 'Industrial']);?>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                        <br>
                    <div class="col-lg-3">
                        <?= html::submitButton('Add',['class'=>'btn btn-primary'])?>
                    </div>
                        </br>
                    <div class="col-lg-2">
                        <a href=<?php echo yii::$app->homeurl;?> class="btn btn-primary">Go Back </a>
                    </div>
                </div>    
            </div>
        </div> 
        <?php ActiveForm::end() ?>   
    </div>
</div>