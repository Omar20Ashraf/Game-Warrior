
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current">
                <a href="#">
                    <i class="glyphicon glyphicon-home"></i>
                    Dashboard
                </a>
            </li>

            
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Latest News
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li>
                        <a href="<?php echo e(route('latestnews.index')); ?>">
                            Latest News
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('latestnews.create')); ?>">
                            Add Latest News
                        </a>
                    </li>                    
                </ul>

            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Home Page
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                
                <ul>
                    <li><a href="<?php echo e(route('hero.index')); ?>">Hero</a></li>
                    <li><a href="<?php echo e(route('hero.create')); ?>">Add Hero</a></li><br>

                    <li><a href="<?php echo e(route('feature.index')); ?>">Feature</a></li>
                    <li><a href="<?php echo e(route('feature.create')); ?>">Add feature</a></li><br>

                    <li><a href="<?php echo e(route('recentgame.index')); ?>">Recent Game</a></li>
                    <li>
                        <a href="<?php echo e(route('recentgame.create')); ?>">Add Recent Game</a>
                    </li><br>

                    <li><a href="<?php echo e(route('tournament.index')); ?>">Tournaments</a></li>
                    <li>
                        <a href="<?php echo e(route('tournament.create')); ?>">Add Tournaments</a>
                    </li><br>

                    <li>
                        <a href="<?php echo e(route('recentreview.index')); ?>">Recent Review</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('recentreview.create')); ?>">Add Recent Review</a>
                    </li>

                </ul>

            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Game Page
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                
                <ul>
                    <li><a href="<?php echo e(route('first.index')); ?>">First</a></li>
                    <li><a href="<?php echo e(route('first.create')); ?>">Add First</a></li><br>

                    <li><a href="<?php echo e(route('game.index')); ?>">Games</a></li>
                    <li><a href="<?php echo e(route('game.create')); ?>">Add Games</a></li><br>                    
                </ul>

            </li>
            <!-- Sub menu -->
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Blog Page
                    <span class="caret pull-right"></span>
                </a>   
                
                <ul>
                    <li><a href="<?php echo e(route('pageinfo.index')); ?>">Page Info</a></li>
                    <li><a href="<?php echo e(route('pageinfo.create')); ?>">Add Page Info</a></li>
                    <br>

                    <li><a href="<?php echo e(route('bloggames.index')); ?>">Blog Games</a></li>
                    <li><a href="<?php echo e(route('bloggames.create')); ?>">Add Blog Games </a></li><br>

                    <li><a href="<?php echo e(route('blogsidebar.index')); ?>">Blog Sidebar</a></li>
                    <li><a href="<?php echo e(route('blogsidebar.create')); ?>">Add Blog Sidebar</a></li>
                    <br>                                        
                </ul>

            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Cotact Us Page
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                
                <ul>
                    <li>
                        <a href="<?php echo e(route('contactbackground.index')); ?>">Background</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('contactbackground.create')); ?>">
                            Add Background
                        </a>
                    </li><br>

                    <li>
                        <a href="<?php echo e(route('personalinfo.index')); ?>">personal Info</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('personalinfo.create')); ?>">
                            Add personal Info
                        </a>
                    </li><br>

                </ul>

            </li>

        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->

