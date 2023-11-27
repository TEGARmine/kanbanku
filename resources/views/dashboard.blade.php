<x-app-layout>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
          <i class="bx bx-code-alt"></i>
          <div class="logo-name"><span>Kanban</span>Ku</div>
        </a>
        <ul class="side-menu">
          <li>
            <a href="#"><i class="bx bxs-dashboard"></i>Dashboard</a>
          </li>
          <li>
            <a href="#"><i class="bx bx-store-alt"></i>Shop</a>
          </li>
          <li class="active">
            <a href="#"><i class="bx bx-analyse"></i>Analytics</a>
          </li>
          <li>
            <a href="#"><i class="bx bx-message-square-dots"></i>Tickets</a>
          </li>
          <li>
            <a href="#"><i class="bx bx-group"></i>Users</a>
          </li>
          <li>
            <a href="#"><i class="bx bx-cog"></i>Settings</a>
          </li>
        </ul>
        <ul class="side-menu">
          <li>
            <a href="#" class="logout">
              <i class="bx bx-log-out-circle"></i>
              Logout
            </a>
          </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
          <i class="bx bx-menu"></i>
          <form action="#">
            <div class="search flex items-center">
                <input class="dark:bg-[#25252c] dark:text-white rounded-l-[36px] ring-0 focus:ring-0 shadow-none focus:shadow-none focus:outline-none border-none focus:border-none border-gray-100 text-sm px-4 py-0 placeholder:text-sm h-[32px]" type="text" placeholder="Search...">
                <button class="bg-[#1976d2] rounded-r-[36px] h-[32px]">
                    <i class="bx bx-search flex justify-center w-12 text-white dark:text-black text-xs"></i>
                </button>
            </div>
          </form>
          <input style="display: none;" type="checkbox" id="theme-toggle" />
          <label for="theme-toggle" class="theme-toggle"></label>
          <a href="#" class="notif">
            <i class="bx bx-bell"></i>
            <span class="count">12</span>
          </a>
          <a href="#" class="profile">
            <img src="images/logo.png" />
          </a>
        </nav>
  
        <!-- End of Navbar -->
  
        <main>
          <div class="header">
            <div class="left">
              <h1>Dashboard</h1>
              <ul class="breadcrumb">
                <li><a href="#"> Analytics </a></li>
                /
                <li><a href="#" class="active">Shop</a></li>
              </ul>
            </div>
            <a href="#" class="report">
              <i class="bx bx-cloud-download"></i>
              <span>Download CSV</span>
            </a>
          </div>
  
          <!-- Insights -->
          <ul class="insights">
            <li>
              <i class="bx bx-calendar-check"></i>
              <span class="info">
                <h3>1,074</h3>
                <p>Paid Order</p>
              </span>
            </li>
            <li>
              <i class="bx bx-show-alt"></i>
              <span class="info">
                <h3>3,944</h3>
                <p>Site Visit</p>
              </span>
            </li>
            <li>
              <i class="bx bx-line-chart"></i>
              <span class="info">
                <h3>14,721</h3>
                <p>Searches</p>
              </span>
            </li>
            <li>
              <i class="bx bx-dollar-circle"></i>
              <span class="info">
                <h3>$6,742</h3>
                <p>Total Sales</p>
              </span>
            </li>
          </ul>
          <!-- End of Insights -->
  
          <div class="bottom-data">
            <div class="orders">
              <div class="header">
                <i class="bx bx-receipt"></i>
                <h3>Recent Orders</h3>
                <i class="bx bx-filter"></i>
                <i class="bx bx-search"></i>
              </div>
              <table>
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Order Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="images/profile-1.jpg" />
                      <p>John Doe</p>
                    </td>
                    <td>14-08-2023</td>
                    <td><span class="status completed">Completed</span></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="images/profile-1.jpg" />
                      <p>John Doe</p>
                    </td>
                    <td>14-08-2023</td>
                    <td><span class="status pending">Pending</span></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="images/profile-1.jpg" />
                      <p>John Doe</p>
                    </td>
                    <td>14-08-2023</td>
                    <td><span class="status process">Processing</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
  
            <!-- Reminders -->
            <div class="reminders">
              <div class="header">
                <i class="bx bx-note"></i>
                <h3>Remiders</h3>
                <i class="bx bx-filter"></i>
                <i class="bx bx-plus"></i>
              </div>
              <ul class="task-list">
                <li class="completed">
                  <div class="task-title">
                    <i class="bx bx-check-circle"></i>
                    <p>Start Our Meeting</p>
                  </div>
                  <i class="bx bx-dots-vertical-rounded"></i>
                </li>
                <li class="completed">
                  <div class="task-title">
                    <i class="bx bx-check-circle"></i>
                    <p>Analyse Our Site</p>
                  </div>
                  <i class="bx bx-dots-vertical-rounded"></i>
                </li>
                <li class="not-completed">
                  <div class="task-title">
                    <i class="bx bx-x-circle"></i>
                    <p>Play Footbal</p>
                  </div>
                  <i class="bx bx-dots-vertical-rounded"></i>
                </li>
              </ul>
            </div>
  
            <!-- End of Reminders-->
          </div>
        </main>
      </div>
</x-app-layout>
