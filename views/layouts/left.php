<aside class="main-sidebar">

    <section class="sidebar">

        <?php 
            $callback = function ($menu) {
            return ['label' => $menu['name'], 'url' => [$menu['route']], 'icon' => $menu['data'], 'items' => $menu['children']];
            };
        ?>

        <?php
            use mdm\admin\components\MenuHelper;
            if(!empty(Yii::$app->user->identity->id))
            {
            $items = MenuHelper::getAssignedMenu(Yii::$app->user->identity->id, null, $callback, true);
            }else{
            $items = array(); 
            }
        ?>

        <?= dmstr\widgets\Menu::widget(
            [   'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => $items,
            ]
        ) ?>


    </section>

</aside>
