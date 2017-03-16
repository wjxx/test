<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>

<table class="list_table" width="100%" cellpadding="0" cellspacing="0">
        	<col width="140px" />
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>operation</th>
            </tr>
            <?php foreach ($data as $k => $v){?> 
            <tr>
                <td><?= Html::encode($v['username']) ?></td>
                <td><?= Html::encode($v['password']) ?></td>
                <td>
                <a href="<?php echo Url::to(['sql/del', 'id' =>$v['id']]);?>">
                <input type="button" value="delete" />
                </a>
                <strong>|</strong>
                <a href="<?php echo Url::to(['sql/save', 'id' =>$v['id']]);?>">
                <input type="button" value="update" />
                </a>
                <strong>|</strong>
                <a href="<?php echo Url::to(['sql/cre'])?>">
                <input type="button" value="create" />
                </a>
                </td>
            </tr>
           <?php }?>

</table><!-- {url:/ucenter/do_invite} -->
<!-- <p>username:||password:</p> -->
