<li class="nav-item dropdown">
    @php
                                  
    $language = request()->segment(1) == 'ar' ? 'العربية' : 'en' ;
    $language1 = request()->segment(1) == 'ar' ? 'الانجليزية': 'ar' ;
    $Localization = request()->segment(1) == 'ar' ? 'en' : 'ar';
    @endphp
    <a class="nav-link dropdown-toggle text-muted pr-0  my-2" href="#" id="navbarDropdownMenuLink"
        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="avatar avatar-sm mt-2">
            {{ strtoupper($language) }}
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($Localization) }}">{{ strtoupper($language1) }}</a>
    </div>
    
</li>
