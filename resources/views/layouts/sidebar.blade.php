<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">-
    <div class="navbar-brand-box">
       

        <a href="/index" >
      <span style="color:white; font-size:15px">  Pharmacy College</span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>


    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>

            <ul class="navbar-nav" id="navbar-nav">

            <li class="nav-item">
                    <a class="nav-link menu-link" href="/index"  
                                
                    >
                        <i class="ri-apps-2-line"></i><span>Dashboard </span>
                    </a>

                    </li>

                    

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i><span>Media </span>
                    </a>



                    <div class="collapse menu-dropdown" id="sidebarApps">
                    
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="{{ route('video.create')}}" class="nav-link" >video</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mediaimage.create')}}" class="nav-link" >Image</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('media-documents.create')}}" class="nav-link">Newsletter</a>
                            </li>



                        </ul>



                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('notices.create')}}">
                        <i class="ri-apps-2-line"></i><span>Notice Board </span>
                    </a>



                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('bannerimage.create')}}">
                        <i class="ri-apps-2-line"></i><span>Banner </span>
                    </a>



                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('faq.create')}}">
                        <i class="ri-apps-2-line"></i><span>FAQs </span>
                    </a>



                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarnaac" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarnaac">
                        <i class="ri-apps-2-line"></i><span>Naac </span>
                    </a>



                    <div class="collapse menu-dropdown" id="sidebarnaac">
                    
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="{{ route('naac-category.create')}}" class="nav-link" >Naac Category</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('naac-reports.create')}}" class="nav-link" >Naac Report</a>
                            </li>
                          



                        </ul>



                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarrecruit" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarrecruit">
                        <i class="ri-apps-2-line"></i><span>Training & placement </span>
                    </a>



                    <div class="collapse menu-dropdown" id="sidebarrecruit">
                    
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="{{ route('recruiter.create')}}" class="nav-link" >Major Recruiter</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('placedstudent.create')}}" class="nav-link" >Placed Student</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('trainingdocument.create')}}" class="nav-link" >Training & placement document</a>
                            </li>
                          



                        </ul>



                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebaracademic" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebaracademic">
                        <i class="ri-apps-2-line"></i><span>Academic </span>
                    </a>



                    <div class="collapse menu-dropdown" id="sidebaracademic">
                    
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="{{ route('courses.create')}}" class="nav-link" >All Courses</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('faculty.create')}}" class="nav-link" >Faculty</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('faculty-documents.create')}}" class="nav-link" >Faculty pdf</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('resultanalysis.create')}}" class="nav-link" >Result Analysis</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('discipline.create')}}" class="nav-link" >Discipline</a>
                            </li>



                        </ul>



                    </div>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('enquiries.index')}}">
                        <i class="ri-apps-2-line"></i><span>Enquiry </span>
                    </a>



                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admission.create')}}">
                        <i class="ri-apps-2-line"></i><span>Admission </span>
                    </a>



                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('careers.index')}}">
                        <i class="ri-apps-2-line"></i><span>Career application </span>
                    </a>



                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('contacts.index')}}">
                        <i class="ri-apps-2-line"></i><span>Contacts </span>
                    </a>



                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('event.index')}}">
                        <i class="ri-apps-2-line"></i><span>Events </span>
                    </a>



                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebaractivity" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebaractivity">
                        <i class="ri-apps-2-line"></i><span>Activity </span>                   </a>



                    <div class="collapse menu-dropdown" id="sidebaractivity">
                    
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="{{ route('Activity-category.index')}}" class="nav-link" >Activity Category</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('collegeactivities.create')}}" class="nav-link" >Activity</a>
                            </li>
                           


                        </ul>



                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('address.edit' , 1)}}">
                        <i class="ri-apps-2-line"></i><span>Address </span>
                    </a>



                </li>

              </ul>

        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>