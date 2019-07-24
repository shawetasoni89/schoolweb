<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/logo.jpeg" class="img-circle" alt="Logo"/>
            </div>
            <div class="pull-left info">
                <p>School</p>
            </div>
        </div>

        

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        ['label' => 'Admin', 'options' => ['class' => 'header']],
                        ['label' => 'Users', 'icon' => 'file-code-o', 'url' => ['/user']],
                        ['label' => 'Teachers', 'icon' => 'dashboard', 'url' => ['/teacher']],
                        ['label' => 'Students', 'icon' => 'circle-o', 'url' => ['/student']],
                        ['label' => 'Parents', 'icon' => 'dashboard', 'url' => ['/parents']],
                        ['label' => 'Classes', 'icon' => 'dashboard', 'url' => ['/classes']],
                        ['label' => 'Levels', 'icon' => 'dashboard', 'url' => ['/level']],
                        ['label' => 'Teacher Classes', 'icon' => 'dashboard', 'url' => ['/teacher_class']],
                        //                    ['label' => 'Parents', 'url' => ['/parents'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Some tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
        )
        ?>

    </section>

</aside>
