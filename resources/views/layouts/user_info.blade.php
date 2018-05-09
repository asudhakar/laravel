<header class="c-navbar u-mb-medium">
	          <button class="c-sidebar-toggle js-sidebar-toggle">
	            <i class="feather icon-align-left"></i>
	          </button>
	          <h2 class="c-navbar__title">@yield('page_heading')</h2>
	          <div class="c-dropdown dropdown u-mr-medium">
		            <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
		              <i class="c-notification__icon feather icon-bell"></i>
		            </div>
		            <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle2">
		              <span class="c-dropdown__menu-header">
		                Notifications
		              </span>
		              <a class="c-dropdown__item dropdown-item" href="#">
		                <div class="o-media">
		                  <div class="o-media__img u-mr-xsmall">
		                    <span class="c-icon c-icon--info c-icon--xsmall"><i class="feather icon-globe"></i></span>
		                  </div>
		                  <div class="o-media__body">
		                    <p>Thanks for using our application, we will send the notification whenever the panel is updated.</p>
		                  </div>
		                </div>
		              </a>
		            </div>
	          </div>
	            <div class="c-dropdown dropdown">
	              <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
	                <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler">
	              </div>

	              <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
	                <a class="c-dropdown__item dropdown-item" href="#">Edit Profile</a>
	                <a class="c-dropdown__item dropdown-item" href="#">View Activity</a>
	                <a class="c-dropdown__item dropdown-item" href="#">Log out</a>
	              </div>
	            </div>
	        </header>