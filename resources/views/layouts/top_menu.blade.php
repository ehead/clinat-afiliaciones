
<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <img src="{{ ( is_null( $currentUser['pic'] ) ? url('img/no-profile-img.jpg') : url('img/uploads/'. $currentUser['pic'] ) ) }}" alt="">{{ $currentUser['name'] }}
    <span class=" fa fa-angle-down"></span>
</a>
<ul class="dropdown-menu dropdown-usermenu pull-right">
    <li><a href="{{ route('perfiles.index', $currentUser['username'] ) }}"> Perfil</a></li>
    <!-- <li>
        <a href="javascript:;">
            <span class="badge bg-red pull-right">50%</span>
            <span>Settings</span>
        </a>
    </li>
    <li><a href="javascript:;">Help</a></li> -->
    
    
    
</ul>
