(function($) {
  'use strict';
  $(function() {
    
    $(".nav-settings").on("click", function() {
      $("#right-sidebar").toggleClass("open");
    });
    $(".settings-close").on("click", function() {
      $("#right-sidebar,#theme-settings").removeClass("open");
    });

    $("#settings-trigger").on("click" , function(){
      $("#theme-settings").toggleClass("open");
    });


    //background constants
    var navbar_classes = "navbar-danger navbar-success navbar-warning navbar-dark navbar-light navbar-primary navbar-info navbar-pink";
    var sidebar_classes = "sidebar-light sidebar-dark";
    var $body = $("body").addClass("sidebar-dark");

    // Set the default navbar and sidebar to navbar-dark
    $(".navbar").addClass("navbar-dark");
    
    var navbarColor = localStorage.getItem("navbarColor");
    if (navbarColor) {
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass(navbarColor);
      $(".tiles").removeClass("selected");
      $(".tiles." + navbarColor.replace("navbar-", "")).addClass("selected");
      $(".content-bg").css("background-color", $(".tiles." + navbarColor.replace("navbar-", "")).css("background-color"));
    } else {
      $(".content-bg").css("background-color", "#fff");
    }
    var sidebarColor = localStorage.getItem("sidebarColor");
    if(sidebarColor) {
      $body.removeClass(sidebar_classes);
      $body.addClass(sidebarColor);
      $(".sidebar-bg-options").removeClass("selected");
      $("#sidebar-" + sidebarColor + "-theme").addClass("selected");
    }

    // Manejar el evento click para cambiar al tema de barra lateral claro
    $("#sidebar-light-theme").on("click" , function(){
      $body.removeClass(sidebar_classes);
      $body.addClass("sidebar-light");
      $(".sidebar-bg-options").removeClass("selected");
      $(this).addClass("selected");
      // Guardar el valor del color seleccionado en el localStorage
      localStorage.setItem("sidebarColor", "sidebar-light");
    });

    // Manejar el evento click para cambiar al tema de barra lateral oscuro
    $("#sidebar-dark-theme").on("click" , function(){
      $body.removeClass(sidebar_classes);
      $body.addClass("sidebar-dark");
      $(".sidebar-bg-options").removeClass("selected");
      $(this).addClass("selected");
      // Guardar el valor del color seleccionado en el localStorage
      localStorage.setItem("sidebarColor", "sidebar-dark");
    });

    //Navbar Backgrounds
    $(".tiles.primary").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-primary");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
      $(".content-bg").css("background-color", "#3A3A79");
      localStorage.setItem("navbarColor", "navbar-primary");
    });
    
    $(".tiles.success").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-success");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
      $(".content-bg").css("background-color", "#1BDE74");
      localStorage.setItem("navbarColor", "navbar-success");
    });
    $(".tiles.warning").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-warning");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
      $(".content-bg").css("background-color", "#DC951B");
      localStorage.setItem("navbarColor", "navbar-warning");
    });
    $(".tiles.danger").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-danger");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
      $(".content-bg").css("background-color", "#EE6062");
      localStorage.setItem("navbarColor", "navbar-danger");
    });
    $(".tiles.light").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-light");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
      $(".content-bg").css("background-color", "fff");
      localStorage.setItem("navbarColor", "navbar-light");
    });
    $(".tiles.info").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-info");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
      $(".content-bg").css("background-color", " #41A3EE");
      localStorage.setItem("navbarColor", "navbar-info");
    });
    $(".tiles.dark").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-dark");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
      $(".content-bg").css("background-color", "#4D546B");
      localStorage.setItem("navbarColor", "navbar-dark");
    });
    $(".tiles.default").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
      $(".content-bg").css("background-color", "#fff");
      localStorage.setItem("navbarColor", "navbar-default");
    });
  });
})(jQuery);
