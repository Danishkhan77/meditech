      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">
        @if($category_name != null)
        <nav id="sidebar">
            <div class="profile-info">
                <figure class="user-cover-image"></figure>
                    <img src="{{ asset('assets/img/logo.png') }}" style=" margin-right: auto;height: 100px;width: 100%;margin-top: -28%;" alt="image">
            </div>
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                
            <li class="menu {{ ($category_name === 'dashboard') ? 'active' : '' }}">
                <a href="{{ url('/home') }}"
                    aria-expanded="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="home"></i>
                        <span>Admin Dashboard</span>
                    </div>
                </a>
            </li>
            
            {{-- Invoice --}}
            <li class="menu {{ ($category_name === 'hospitals') ? 'active' : '' }}" >

                <a href="#hospitals" data-toggle="collapse" aria-expanded="{{ ($category_name === 'hospitals') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Invoice</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled {{ ($category_name === 'hospitals') ? 'show' : '' }}" id="hospitals" data-parent="#accordionExample">
                    <li class="{{($page_name === 'create_hospital') ? 'active' : '' }}">
                        <a href="{{url('/hospital/create')}}"> Create Invoice </a>
                    </li>
                    <li class="{{($page_name === 'manage_hospitals') ? 'active' : '' }}">
                        <a href="{{url('/manage/hospitals')}}"> Manage Invoice </a>
                    </li>
                    
                </ul>
            </li>
            {{-- End Invoice --}}

                {{-- Hospital --}}
                <li class="menu {{ ($category_name === 'hospitals') ? 'active' : '' }}" >

                    <a href="#hospitals" data-toggle="collapse" aria-expanded="{{ ($category_name === 'hospitals') ? 'true' : 'false' }}" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Hospitals</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled {{ ($category_name === 'hospitals') ? 'show' : '' }}" id="hospitals" data-parent="#accordionExample">
                        <li class="{{($page_name === 'create_hospital') ? 'active' : '' }}">
                            <a href="{{url('/hospital/create')}}"> Add Hospital </a>
                        </li>
                        <li class="{{($page_name === 'manage_hospitals') ? 'active' : '' }}">
                            <a href="{{url('/manage/hospitals')}}"> Manage Hospital </a>
                        </li>
                        
                    </ul>
                </li>
                {{-- End Hospital --}}
                              
                
            {{-- Trash Box --}}
            <li class="menu {{ ($category_name === 'trashbox') ? 'active' : '' }}">
                <a href="#trashbox" data-toggle="collapse" aria-expanded="{{ ($category_name === 'trashbox') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Trash Box</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled {{ ($category_name === 'trashbox') ? 'show' : '' }}" id="trashbox" data-parent="#accordionExample">
                    <li class="{{($page_name === 'trashproject') ? 'active' : '' }}">
                        <a href="{{url("/manage/trashproject")}}">Project </a>
                    </li>
                    <li class="{{($page_name === 'trash_supplier') ? 'active' : '' }}">
                        <a href="{{url("/manage/trashsupplier")}}">Supplier </a>
                    </li>
                    <li class="{{($page_name === 'trash_contractor') ? 'active' : '' }}">
                        <a href="{{url("/manage/trashcontractor")}}">Contractor </a>
                    </li>
                    <li class="{{($page_name === 'trash_employee') ? 'active' : '' }}">
                        <a href="{{url("/manage/trashemployee")}}">Employee </a>
                    </li>
                </ul>
            </li>
            {{-- Trash Box End --}}
            </ul>
        </nav>
        @endif
    </div>
    <!--  END SIDEBAR  -->