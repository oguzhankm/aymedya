<!--sidebar-->
<div class="sidebar">

    <ul>
        <li class="<?php active('index') ? print 'active' : '' ?>">
            <a href="{{url('index')}}">
                <span class="fa fa-tachometer"></span>
                <span class="title">
                    PANO
                </span>
            </a>
        </li>
        <li class="">
            <a href="#">
                <span class="fa fa-thumb-tack"></span>
                <span class="title">
                    Posts
                </span>
            </a>
            <ul class="sub-menu">
                <li class="active">
                    <a href="#">
                        All Posts
                    </a>
                </li>
                <li>
                    <a href="#">
                        Add New
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categories
                    </a>
                </li>
                <li>
                    <a href="#">
                        Tags
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-file-image-o"></span>
                <span class="title">
                    Media <span class="pending-count">45</span>
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-file"></span>
                <span class="title">
                    Pages
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-comment"></span>
                <span class="title">
                    Comments
                </span>
            </a>
        </li>
        <li class="#">
            <a href="#">
                <span class="fa fa-plug"></span>
                <span class="title">
                    Plugins
                </span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="/user/polat">
                        Installed Plugins
                    </a>
                </li>
                <li>
                    <a href="/user/oguz">
                        Add New
                    </a>
                </li>
                <li>
                    <a href="/user/busra">
                        Editor
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-wrench"></span>
                <span class="title">
                    Tools
                </span>
            </a>
        </li>
        <li class="<?php active('settings') ? print 'active' : '' ?>">
            <a href="{{url('settings')}}">
                <span class="fa fa-cog"></span>
                <span class="title">
                    Ayarlar
                </span>
            </a>
        </li>
        <li class="line">
            <span></span>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Collapse menu
        </span>
    </a>

</div>