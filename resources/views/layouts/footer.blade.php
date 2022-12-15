
    <!-- App Settings FAB -->
    <div id="app-settings">
      <app-settings
        layout-active="default"
        :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-index.html',
      'fluid': 'fluid-index.html',
      'mini': 'mini-index.html'
    }"
      ></app-settings>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets')}}/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets')}}/vendor/popper.min.js"></script>
    <script src="{{asset('assets')}}/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{asset('assets')}}/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="{{asset('assets')}}/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="{{asset('assets')}}/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="{{asset('assets')}}/vendor/ion.rangeSlider.min.js"></script>
    <script src="{{asset('assets')}}/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="{{asset('assets')}}/js/toggle-check-all.js"></script>
    <script src="{{asset('assets')}}/js/check-selected-row.js"></script>
    <script src="{{asset('assets')}}/js/dropdown.js"></script>
    <script src="{{asset('assets')}}/js/sidebar-mini.js"></script>
    <script src="{{asset('assets')}}/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{asset('assets')}}/js/app-settings.js"></script>
  </body>
</html>