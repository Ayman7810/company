<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item ">
            <a href="{{ route('admin.index') }}" class=" nav-link">
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">{{__('shard.home')}}</span>
            </a>
          </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>{{__('shard.Component')}}</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <x-sidebar-tab name="{{__('shard.services')}}" href="{{ route('admin.service.index') }}" icon="fe-codesandbox"></x-sidebar-tab>

          <x-sidebar-tab name="{{__('shard.blogs')}}" href="{{ route('admin.blog.index') }}" icon="fe-trello"></x-sidebar-tab>

          <x-sidebar-tab name="{{__('shard.projects')}}" href="{{ route('admin.project.index') }}" icon="fe-briefcase"></x-sidebar-tab>  

          <x-sidebar-tab name="{{__('shard.Advisor')}}" href="{{ route('admin.advisor.index') }}" icon="fe-award"></x-sidebar-tab> 
           
          <x-sidebar-tab name="{{__('shard.partners')}}" href="{{ route('admin.partner.index') }}" icon="fe-slack"></x-sidebar-tab>  

          <x-sidebar-tab name="{{__('shard.certificates')}}" href="{{ route('admin.certificate.index') }}" icon="fe-users"></x-sidebar-tab> 

          <x-sidebar-tab name="{{__('shard.features')}}" href="{{ route('admin.feature.index') }}" icon="fe-star"></x-sidebar-tab>  

          <x-sidebar-tab name="{{__('shard.feedback')}}" href="{{ route('admin.feedback.index') }}" icon="fe-message-circle"></x-sidebar-tab>  
        </ul>
      </nav>
    </aside>