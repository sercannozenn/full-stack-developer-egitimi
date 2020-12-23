<ul class="collapsible">
    <li class="small-cap"><span class="hide-menu">Panel</span></li>
    <li>
        <a href="javascript: void(0);" class="collapsible-header has-arrow">
            <i class="material-icons">library_books</i>
            <span class="hide-menu"> Makale Yönetimi</span>
        </a>
        <div class="collapsible-body">
            <ul>
                <li>
                    <a href="{{ route('post.create') }}">
                        <i class="material-icons dp48">queue</i>
                        <span class="hide-menu"> Makale Ekle </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}" ><i class="material-icons dp48">view_list</i>
                        <span class="hide-menu"> Makale Listesi </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('tag.index')}}"><i class="material-icons dp48">view_list</i>
                        <span class="hide-menu"> Etiket Listesi </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('category.index')}}"><i class="material-icons dp48">view_list</i>
                        <span class="hide-menu"> Kategori Listesi </span>
                    </a>
                </li>

            </ul>
        </div>
    </li>
    <li>
        <a href="javascript: void(0);" class="collapsible-header has-arrow">
            <i class="material-icons">supervisor_account</i>
            <span class="hide-menu">Profil Yönetimi</span>
        </a>
        <div class="collapsible-body">
            <ul>
                <li>
                    <a href="{{ route('admin.viewProfile') }}">
                        <i class="material-icons dp48">portrait</i>
                        <span class="hide-menu"> Profilim </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>
