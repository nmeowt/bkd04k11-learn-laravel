<div class="sidebar" data-color="orange" data-image="../assets/img/full-screen-image-3.jpg">

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            04
        </a>

        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            BKD04K11
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="info text-center">
                <span>
                    {{ Session::get('fullName') }}
                </span>
            </div>
        </div>

        <ul class="nav">
            <li>
                <a href="{{ route('class.index') }}">
                    <i class="pe-7s-graph"></i>
                    <p>Quản lý lớp</p>
                </a>
            </li>
            <li>
                <a href="{{ route('student.index') }}">
                    <i class="pe-7s-users"></i>
                    <p>Quản lý sinh viên</p>
                </a>
            </li>
            <li>
                <a href="{{ route('demo.index') }}">
                    <i class="pe-7s-users"></i>
                    <p>Demo Select</p>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="pe-7s-date"></i>
                    <p>Calendar</p>
                </a>
            </li>
        </ul>
    </div>
</div>
