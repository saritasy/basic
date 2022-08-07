<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Company Application';
?>
<div class="site-index">
    <?php if(yii::$app->session->hasFlash('message')):?>
    <?php echo yii::$app->session->getFlash('message');?>
    <?php endif; ?>
    <div class="jumbotron text-center bg-transparent">
        <h1 style="color: #337ad7">Company CrudOperation</h1>
    </div>
    <div class="row">
        <span style="margin-bottom:20px"><?= html::a('create',['/site/create'],['class'=>'btn btn-primary'])?></span>  
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Location</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($company)>0): ?>
                <?php foreach($company as $Company): ?>
            <tr class="table-active">
            <th scope="row"><?php echo $Company -> Name; ?></th>
            <td><?php echo $Company-> Description; ?></td>
            <td><?php echo $Company-> Location; ?></td>
            <td><?php echo $Company-> Type; ?></td>
            <td>
            <span><?= html::a('View')?></span>
            <span><?= html::a('Update')?></span>
            <span><?= html::a('Delete')?></span>
            </td>    
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td>No Records!</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
   <!-- <style>
        .View {
        background-color: white; 
        color: black; 
        border: 2px solid #4CAF50;
        }

        .View:hover {
        background-color: #4CAF50;
        color: white;
        }

        .Update {
        background-color: white; 
        color: black; 
        border: 2px solid #008CBA;
        }

        .Update:hover {
        background-color: #008CBA;
        color: white;
        }

        .Delete {
        background-color: white; 
        color: black; 
        border: 2px solid #f44336;
        }

        .Delete:hover {
        background-color: #f44336;
        color: white;
        }

    </style>-->
</div>