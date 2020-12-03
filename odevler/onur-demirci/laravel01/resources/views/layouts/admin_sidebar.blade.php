<!-- Primary Navigation -->
<nav id="primary-nav">
    <ul>
        <li>
            <a class="{{Request::is('admin') ? 'active' : '' }}" href="{{ Request::is('admin') ? "javascript:void(0)" : route('admin_index') }}"><i class="fa fa-fire"></i>Dashboard Ana Sayfa</a>
        </li>
        <li>
            <a href="javascript:void(0)" class="{{Request::is('admin/*') ?  : '' }}"><i class="fa fa-file-text-o"></i>Makaleler</a>
            <ul {{ request()->is('admin/add-article') || request()->is('admin/edit-article') || request()->is('admin/article-editor') ? 'style=display:block!important;' : '' }}>
                <li>
                    <a class="{{ request()->is('admin/add-article')  ? 'active' : '' }}" href="{{ Request::is('admin/add-article') ? "javascript:void(0)" : route('add_article') }}"><i class="fa fa-plus"></i>Makale Ekle</a>
                </li>
                <li>
                    <a class="{{ request()->is('admin/edit-article') ? 'active' : '' }}" href="{{ Request::is('admin/edit-article') ? "javascript:void(0)" : route('edit_article') }}"><i class="fa fa-pencil"></i>Makale Düzenle</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>