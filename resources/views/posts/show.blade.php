@extends ('layouts.master')

@section ('title')
	This is second Page
@endsection

@section('page_heading')
	Welcome
@endsection

@section('main_content')
	<div class="container">
          <div class="row">
            <div class="col-12">
              <nav class="c-tabs"> 
                <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
                  <a class="c-tabs__link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                    <span class="c-tabs__link-icon">
                      <i class="feather icon-settings"></i>
                    </span>Account Settings
                  </a>
                  <a class="c-tabs__link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                    <span class="c-tabs__link-icon">
                      <i class="feather icon-sliders"></i>
                    </span>Edit Profile
                  </a>
                  <a class="c-tabs__link u-hidden-down@tablet" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                    <span class="c-tabs__link-icon">
                      <i class="feather icon-credit-card"></i>
                    </span>Billing Methods
                  </a>
                </div>
                <div class="c-tabs__content tab-content" id="nav-tabContent">
                  <div class="c-tabs__pane active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                    <div class="row">
                      <div class="col-xl-4">
                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-name">Name</label>
                          <input class="c-input" type="text" id="user-name">
                        </div>

                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-email">Email Address</label>
                          <input class="c-input" type="text" id="user-email">
                        </div>
                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-phone">Phone Number</label>
                          <input class="c-input" type="tel" id="user-phone">
                        </div>

                        <div class="c-field u-mb-xsmall">
                          <label class="c-switch">
                            <input class="c-switch__input" id="user-newsleters" type="checkbox" checked="">
                            <span class="c-switch__label">Subscribe to Our Newsletters</span>
                          </label>
                        </div>

                        <div class="c-field u-mb-xsmall">
                          <label class="c-switch">
                            <input class="c-switch__input" id="user-tracking" type="checkbox">
                            <span class="c-switch__label">Enable Usage Data Tracking</span>
                          </label>
                        </div>
                      </div>

                      <div class="col-xl-4">

                        <div class="c-field u-mb-xsmall">
                          <label class="c-field__label" for="user-plan">Plan</label>
                          <div class="c-select">
                            <select class="c-select__input" id="user-plan">
                              <option>Free</option>
                              <option>Pro</option>
                              <option>Startup</option>
                            </select>
                          </div>
                        </div>

                        <div class="c-note u-mb-medium">
                          <span class="c-note__icon">
                            <i class="feather icon-info"></i>
                          </span>

                          <p>You plan is calculated based on many factors includeing usage, time and billing option.</p>
                        </div>

                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-zip">ZIP Code</label>
                          <input class="c-input" type="text" id="user-zip">
                        </div>

                        <div class="c-field u-mb-medium">
                          <label class="c-field__label" for="user-country">Country</label>
                          <div class="c-select">
                            <select class="c-select__input" id="user-country">
                              <option>Australia</option>
                              <option>Singapore</option>
                              <option>United Stated</option>
                              <option>United Kingdom</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-4">

                        <div class="c-card u-text-center">
                          <div class="c-avatar u-inline-flex">
                            <img class="c-avatar__img" src="http://via.placeholder.com/350x150" alt="Adam Sandler">
                          </div>

                          <h5>Adam Sandler</h5>
                          <p class="u-pb-small u-mb-small u-border-bottom">Freelance Web Developer</p>

                          <p class="u-h4">
                            <a class="u-mr-xsmall" href="#">
                              <i class="feather icon-facebook"></i>
                            </a>
                            <a class="u-mr-xsmall" href="#">
                              <i class="feather icon-twitter"></i>
                            </a>
                            <a class="u-mr-xsmall" href="#">
                              <i class="feather icon-github"></i>
                            </a>
                          </p>
                        </div>
                        
                      </div>
                    </div>

                    <span class="c-divider u-mv-medium"></span>

                    <div class="row">
                      <div class="col-12 col-sm-7 col-xl-2 u-mr-auto u-mb-xsmall">
                        <button class="c-btn c-btn--info c-btn--fullwidth">Save Settings</button>
                      </div>

                      <div class="col-12 col-sm-5 col-xl-3 u-text-right">
                        <button class="c-btn c-btn--danger c-btn--fullwidth c-btn--outline" data-toggle="modal" data-target="#modal-delete">Delete My Account</button>

                        <div class="c-modal c-modal--small modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete">
                          <div class="c-modal__dialog modal-dialog" role="document">
                              <div class="c-modal__content">
                                  <div class="c-modal__body">
                                    <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                                        <i class="feather icon-x"></i>
                                    </span>

                                    <span class="c-icon c-icon--danger c-icon--large u-mb-small">
                                      <i class="feather icon-alert-triangle"></i>
                                    </span>
                                    <h3 class="u-mb-small">Do you want to delete your account?</h3>
                                    
                                    <p class="u-mb-medium">By deleting you account, you no longer have access to your dashboard, members and your information.</p>

                                    <div class="u-text-center">
                                      <a href="#" class="c-btn c-btn--danger c-btn--outline u-mr-small" data-dismiss="modal" aria-label="Close">Cancel</a>
                                      <a href="#" class="c-btn c-btn--danger">Delete</a>
                                    </div>
                                  </div>
                              </div><!-- // .c-modal__content -->
                          </div><!-- // .c-modal__dialog -->
                        </div><!-- // .c-modal -->
                      </div>
                    </div>
                  </div>

                  <div class="c-tabs__pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">ducimus quam fuga, vero atque, error laboriosam odio provident eveniet nemo reiciendis non optio, laborum enim ipsum dolorum, voluptatem ducimus quam fuga, vero atque, error laboriosam odio provident eveniet nemo!</div>
                  <div class="c-tabs__pane" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">optio, laborum enim ipsum dolorum, voluptatem ducimus quam fuga, vero atque, error laboriosam odio provident eveniet nemo reicienoptio, laborum enim ipsum dolorum, voluptatem ducimus quam fuga, vero atque, error laboriosam odio provident eveniet nemo reicien</div>
                </div>
              </nav>
            </div>
          </div>
        </div>
@endsection