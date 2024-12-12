<?php

function plugin_sampleplugin_install() {
    return true;
}

function plugin_sampleplugin_uninstall() {
    return true;
}

/**
 * Display a toast notification after plugin installation
 *
 * @return void
 */
function display_toast_message() {
  // You can customize this message as needed
  echo '<div class="toast-container bottom-0 end-0 p-3 messages_after_redirect" id="messages_after_redirect">
           <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
               <div class="toast-header">
                   <strong class="mr-auto">Plugin Installed</strong>
                   <small>Just Now</small>
                   <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="toast-body">
                   The plugin was successfully installed!
               </div>
           </div>
        </div>';

  // Initialize the toast with JavaScript
  echo '<script type="text/javascript">
          var initMessagesAfterRedirectToasts = function() {
              var toastElList = [].slice.call(document.querySelectorAll("#messages_after_redirect .toast:not(.show)"));
              var toastList = toastElList.map(function (toastEl) {
                  var toast = new bootstrap.Toast(toastEl, { delay: 10000 });
                  toast.show();
                  $(toastEl).on("hidden.bs.toast", function () {
                      $(toastEl).remove();
                  });
                  return toast;
              });
          };
          $(function() {
              initMessagesAfterRedirectToasts();
          });
          aler("welcome home")
        </script>';
}


/**
 * Display a custom large welcome message on the login page with Bootstrap
 *
 * @return void
 */
function myplugin_display_login() {
    echo '<div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="text-center bg-light p-5 rounded shadow-sm">
                <h1 class="display-4 text-primary mb-3">Welcome to the GLPI System!</h1>
                <p class="lead text-secondary">Please log in to continue and manage your IT resources.</p>
            </div>
          </div>';
}




